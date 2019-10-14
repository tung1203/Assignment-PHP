<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->productModel = $this->model('Page');
    }

    public function index($page = 1)
    {
        if(!is_numeric($page)){
            return $this->view('404');
        }
        $limitPerPage = 20;
        $start_from = ($page - 1) * $limitPerPage;
        $productsLimit = $this->productModel->getProductsLimit($start_from, $limitPerPage);

        // Get all products
        $products = $this->productModel->getProducts();
        $totalProducts = count($products);

        // Total Pages
        $totalPages = ceil($totalProducts / $limitPerPage);

        // page not found
        if ($page < 1 || $page > $totalPages) {
            return $this->view('404');
        }
        $data = [
            'products' => $productsLimit,
            'totalPages' => $totalPages,
            'currentPage' => $page
        ];

        $this->view('pages/index', $data);
    }

}