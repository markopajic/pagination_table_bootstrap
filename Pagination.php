<?php

class Pagination
{
    public function showPagination($pageCount, $currentPage = 1)
    {
        $page = "";

        for ($i = 1; $i <= $pageCount; $i++) {
            if ((isset($_GET["page"]) && $_GET['page'] > 1) && $i == 1) {
                $page .= '<li class="page-item"><a class="page-link" href="' . $this->createUrl($_GET["page"] - 1) . '">Previous</a></li>';
            }

            $page .= '<li class="page-item ' . (((isset($_GET["page"]) && $i == $_GET["page"]) || (!isset($_GET["page"]) && $i == 1)) ? "active" : "") . '"><a class="page-link" type="submit" value="' . $i . '" href="' . $this->createUrl($i) . '">' . $i . '</a></li>';

            if ($i == $pageCount && ((isset($_GET['page']) && $i != $_GET['page']) || !isset($_GET['page']))) {
                $page .= '<li class="page-item"><a class="page-link" href="' . $this->createUrl((isset($_GET['page']) ? $_GET["page"] + 1 : 2)) . '">Next</a></li>';
            }
        }

        return '
        <div>
            <nav aria-label="Page navigation example">
                <form id = "page">
                <ul class="pagination">
                    ' . $page . '
                </ul>
                </form>
            </nav>
        </div>
        ';
    }
    
    //This method creates url for pagination buttons
    public function createUrl($pageNumber)
    {
        $currentUrl = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $urlParameters = http_build_query(array_merge($_GET, array("page" => $pageNumber)));

        return $currentUrl . "?" . $urlParameters;

    }
}
$pagination = new Pagination();