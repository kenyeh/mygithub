<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url()?>resource/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
	/*
	* Globals
	*/
	html, body {
		/* 設定body高度為100% 拉到視窗可視的大小 */
		height: 100%;
	}
	
	body {
	  font-family: Georgia, "Times New Roman", Times, serif;
	  color: #555;
	}

	h1, .h1,
	h2, .h2,
	h3, .h3,
	h4, .h4,
	h5, .h5,
	h6, .h6 {
	  margin-top: 0;
	  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	  font-weight: normal;
	  color: #333;
	}


	/*
	 * Override Bootstrap's default container.
	 */

	@media (min-width: 1200px) {
	  .container {
		width: 970px;
	  }
	}


	/*
	 * Masthead for nav
	 */

	.blog-masthead {
	  background-color: #428bca;
	  -webkit-box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
			  box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
	}

	/* Nav links */
	.blog-nav-item {
	  position: relative;
	  display: inline-block;
	  padding: 10px;
	  font-weight: 500;
	  color: #cdddeb;
	}
	.blog-nav-item:hover,
	.blog-nav-item:focus {
	  color: #fff;
	  text-decoration: none;
	}

	/* Active state gets a caret at the bottom */
	.blog-nav .active {
	  color: #fff;
	}
	.blog-nav .active:after {
	  position: absolute;
	  bottom: 0;
	  left: 50%;
	  width: 0;
	  height: 0;
	  margin-left: -5px;
	  vertical-align: middle;
	  content: " ";
	  border-right: 5px solid transparent;
	  border-bottom: 5px solid;
	  border-left: 5px solid transparent;
	}


	/*
	 * Blog name and description
	 */

	.blog-header {
	  padding-top: 20px;
	  padding-bottom: 20px;
	}
	.blog-title {
	  margin-top: 30px;
	  margin-bottom: 0;
	  font-size: 60px;
	  font-weight: normal;
	}
	.blog-description {
	  font-size: 20px;
	  color: #999;
	}


	/*
	 * Main column and sidebar layout
	 */

	.blog-main {
	  font-size: 18px;
	  line-height: 1.5;
	}

	/* Sidebar modules for boxing content */
	.sidebar-module {
	  padding: 15px;
	  margin: 0 -15px 15px;
	}
	.sidebar-module-inset {
	  padding: 15px;
	  background-color: #f5f5f5;
	  border-radius: 4px;
	}
	.sidebar-module-inset p:last-child,
	.sidebar-module-inset ul:last-child,
	.sidebar-module-inset ol:last-child {
	  margin-bottom: 0;
	}


	/* Pagination */
	.pager {
	  margin-bottom: 60px;
	  text-align: left;
	}
	.pager > li > a {
	  width: 140px;
	  padding: 10px 20px;
	  text-align: center;
	  border-radius: 30px;
	}


	/*
	 * Blog posts
	 */

	.blog-post {
	  margin-bottom: 60px;
	}
	.blog-post-title {
	  margin-bottom: 5px;
	  font-size: 40px;
	}
	.blog-post-meta {
	  margin-bottom: 20px;
	  color: #999;
	}
	
	/*
	 * Blog archive
	 */
	 
	.blog-archive {
	  margin-bottom: 60px;
	  min-height: 75%;
	}
	 
	 
	 
	 

	/*
	 * Footer
	 */

	.blog-footer {
	  padding: 40px 0;
	  color: #999;
	  text-align: center;
	  background-color: #f9f9f9;
	  border-top: 1px solid #e5e5e5;
	}
	.blog-footer p:last-child {
	  margin-bottom: 0;
	}
  </style>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
    <script src="<?= base_url()?>resource/js/jquery.min.js"></script>
    <script src="<?= base_url()?>resource/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	
	<script src="<?= base_url()?>resource/js/MY_main.js"></script>
	
	
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a id="Blog_index_link" class="blog-nav-item" href="<?= base_url()?>blog">Blog</a>
          <a id="Blog_post_link" class="blog-nav-item" href="<?= base_url()?>blog/post">Post</a>
          <a class="blog-nav-item" href="<?= base_url()?>">Profile</a>
        </nav>
      </div>
    </div>

    