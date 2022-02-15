<?php
require_once "vendor/autoload.php";
use App\classes\Category;
use App\classes\News;

if(isset($_GET['pages']))
{
    if($_GET['pages']=='all-pages')
    {
        $category= new Category();
        $categories= $category->category();
        $news= new News();
        $allNews= $news->index();
        include 'pages/allNews.php';
    }
    elseif ($_GET['pages']=='category-news')
    {
        $category= new Category();
        $categories= $category->category();
        $news = new News();
        $allNews= $news->shortNews($_GET['categoryid']);
        include 'pages/allNews.php';

    }
    // elseif ($_GET['pages']=='product-details')
    // {
    //     $category= new Category();
    //     $categories= $category->category();
    //     $product= new Products();
    //     $productDetails =$product->getProductDetails($_GET['product_id']);
    //     include 'pages/productDetails.php';

    // }

}