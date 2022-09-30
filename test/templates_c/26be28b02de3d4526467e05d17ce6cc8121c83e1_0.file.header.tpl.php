<?php
/* Smarty version 4.2.0, created on 2022-09-30 07:30:10
  from 'C:\xampp\htdocs\smarty_project\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63367ee2801827_19317479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26be28b02de3d4526467e05d17ce6cc8121c83e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_project\\templates\\header.tpl',
      1 => 1664515808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63367ee2801827_19317479 (Smarty_Internal_Template $_smarty_tpl) {
?><HTML>
<HEAD>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <style>
  *{
      font-family: "Times New Roman", Times, serif;
      font-weight:800;
      font-size:16px;
  }
   .sidepanel  {
            width: 0;
            position: fixed;
            z-index: 1;
            height: 250px;
            top: 0;
            left: 0;
            background-color: #ffff;
            overflow-y: auto;
            transition: 0.5s;
            padding-top: 60px;
        }
        .sidepanel a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #0d0505;
            display: block;
            transition: 0.3s;
        }

        .sidepanel a:hover {
            color:blue;
        }
        .height500{
            /* height:500px; */
            height: -webkit-fill-available;
        }


  </style>
</HEAD>
<BODY bgcolor="#fff">
    <div class="container mt-1">
    
        <nav class="navbar bg-light" style="z-index:1">
    <div class="container">
        
    <a class="navbar-brand" href="#">
    <img src="https://www.ucertify.com/layout/themes/bootstrap4/images/logo/ucertify_logo.png" class="align-middle w-100 h-100"  alt="Ucertify logo" width="30" height="24">
    </a>
    <div class="d-flex mx-auto"><h1>uCertify Test Prep</h1></div>
    </div>
    </nav>
            <hr/>
        </div> 
        
    
<?php }
}
