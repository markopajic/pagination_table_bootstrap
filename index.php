<?php

require_once('./class/config.php');
require_once('./class/Pagination.php');

$limit = 10;
$offset = 0;
$page = 0;

if (isset($_GET['rowsPerPage'])) {
    $limit = $_GET['rowsPerPage'];
}

if (isset($_GET['page'])) {
    if ($_GET['page'] > 1) {
        $offset = $limit * ($_GET['page'] - 1);
        $page = $_GET['page'] - 1;
    }
}

$result = $conn->query("SELECT * FROM employees");
$employees = $result->fetch_all(MYSQLI_ASSOC);

$pages = ceil(count($employees) / $limit);
$dataPerPage = array_chunk($employees, $limit);

function addUrlParam($name, $value)
{
    $url = $_SERVER['REQUEST_URI'];

    $queryParams = [];
    parse_str(parse_url($url, PHP_URL_QUERY), $queryParams);

    $queryParams[$name] = $value;

    $newQuery = http_build_query($queryParams);

    if (strpos($url, '?') !== false) {
        $url = preg_replace('/(\?|&)' . $name . '=[^&]+/', '', $url);
        $url .= '&' . $newQuery;
    } else {
        $url .= '?' . $newQuery;
    }

    return $url;
}

    $searchName = isset($_GET['name']) ? $_GET['name'] : '';

    $filteredEmployees = $employees;
        if (!empty($searchName)) {
            $filteredEmployees = array_filter($employees, function ($employee) use ($searchName) {
                return stripos($employee['name'], $searchName) !== false;
            });
        }

    $pages = ceil(count($filteredEmployees) / $limit);
    $dataPerPage = array_chunk($filteredEmployees, $limit);


    $sortColumn = isset($_GET['sort']) ? $_GET['sort'] : 'id';
    $sortOrder = isset($_GET['order']) && $_GET['order'] === 'desc' ? 'desc' : 'asc';
    function generateSortUrl($column) {
        global $sortColumn, $sortOrder;
        $order = ($column === $sortColumn && $sortOrder === 'asc') ? 'desc' : 'asc';
        return addUrlParam('sort', $column) . '&' . addUrlParam('order', $order);
        }
?>
<html lang="en">

<head>
    <script>
        function sortByColumn(column) {
            window.location.href = '<?php echo $_SERVER['REQUEST_URI']; ?>&sort=' + column;
        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Employees table</title>
</head>

<body>
    <div class="container pt-5">
        <div class="aBlock">
            <h2>Employees table</h2>
            <form method="get" class="row g-2">
                <div class="col-auto">
                    <input class="form-control" type="text" name="name" value="<?php echo $searchName; ?>">
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">
                        <a href="<?php echo generateSortUrl('id'); ?>" onclick="sortByColumn('id');">ID</a>
                            <?php if ($sortColumn === 'id'): ?>
                                <i class="fa-solid fa-caret-<?php echo $sortOrder === 'asc' ? 'down' : 'up'; ?>"></i>
                            <?php endif; ?>
                    </th>
                    <th scope="col">
                        <a href="<?php echo generateSortUrl('name'); ?>" onclick="sortByColumn('name');">Name</a>
                            <?php if ($sortColumn === 'name'): ?>
                                <i class="fa-solid fa-caret-<?php echo $sortOrder === 'asc' ? 'down' : 'up'; ?>"></i>
                            <?php endif; ?>
                    </th>
                    <th scope="col">
                        <a href="<?php echo generateSortUrl('position'); ?>" onclick="sortByColumn('position');">Position</a>
                            <?php if ($sortColumn === 'position'): ?>
                                <i class="fa-solid fa-caret-<?php echo $sortOrder === 'asc' ? 'down' : 'up'; ?>"></i>
                            <?php endif; ?>
                    </th>
                    <th scope="col">
                        <a href="<?php echo generateSortUrl('office'); ?>" onclick="sortByColumn('office');">Office</a>
                            <?php if ($sortColumn === 'office'): ?>
                                <i class="fa-solid fa-caret-<?php echo $sortOrder === 'asc' ? 'down' : 'up'; ?>"></i>
                            <?php endif; ?>
                    </th>
                    <th scope="col">
                        <a href="<?php echo generateSortUrl('age'); ?>" onclick="sortByColumn('age');">Age</a>
                            <?php if ($sortColumn === 'age'): ?>
                                <i class="fa-solid fa-caret-<?php echo $sortOrder === 'asc' ? 'down' : 'up'; ?>"></i>
                            <?php endif; ?>
                    </th>
                    <th scope="col">
                        <a href="<?php echo generateSortUrl('startDate'); ?>" onclick="sortByColumn('startDate');">Start Date</a>
                            <?php if ($sortColumn === 'startDate'): ?>
                                <i class="fa-solid fa-caret-<?php echo $sortOrder === 'asc' ? 'down' : 'up'; ?>"></i>
                            <?php endif; ?>
                    </th>
                    <th scope="col">
                        <a href="<?php echo generateSortUrl('salary'); ?>" onclick="sortByColumn('salary');">Salary</a>
                            <?php if ($sortColumn === 'salary'): ?>
                                <i class="fa-solid fa-caret-<?php echo $sortOrder === 'asc' ? 'down' : 'up'; ?>"></i>
                            <?php endif; ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (!empty($filteredEmployees)) {
                        usort($dataPerPage[$page], function ($a, $b) use ($sortColumn, $sortOrder) {
                        $aValue = $a[$sortColumn];
                        $bValue = $b[$sortColumn];
                    if ($sortOrder === 'asc') {
                        return $aValue <=> $bValue;
                    } else {
                        return $bValue <=> $aValue;
                        }
                    });
                    foreach ($dataPerPage[$page] as $employee) {
                        echo "<tr>";
                        echo "<td>" . $employee['id'] . "</td>";
                        echo "<td>" . $employee['name'] . "</td>";
                        echo "<td>" . $employee['position'] . "</td>";
                        echo "<td>" . $employee['office'] . "</td>";
                        echo "<td>" . $employee['age'] . "</td>";
                        echo "<td>" . $employee['startDate'] . "</td>";
                        echo "<td>" . $employee['salary'] . "</td>";
                        echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>No results found.</td></tr>";
                    }
                ?>
            </tbody>
        </table>

        <div class="aBlock">

            <?php
            if(!empty($employees)){
                echo $pagination->showPagination($pages);
            }
            ?>

            <div style="display: flex;align-items: center">
                <span>Show</span>
                <form id="perPageForm">
                    <select class="form-select" name="rowsPerPage" id="rowsPerPage" onchange="this.form.submit()">
                        <option value="5">5 results</option>
                        <option value="10" selected>10 results</option>
                        <option value="20">20 results</option>
                    </select>
                </form>
            </div>
        </div>


    </div>

</body>

</html>