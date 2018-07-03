<?php
$title = 'Brand';
$form = 'Browse';
$account = 'My Account';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $title ?></title>
</head>
<body>
<div class="page">
  <header class="header">
    <a href="index.html" class="header__logo logo"><img src="img/logo.png" class="logo-img" width="59" height="51"
                                                        alt="brand">
      <p class="logo-p">bran<span class="logo-span">d</span></p></a>
    <form action="#" method="post" class="header__search-form search-form">
      <select class="search-form__select" title="search" name="select-browse">
        <option class="search-form__select-option" value="Browse"><?= $form ?></option>
        <option class="search-form__select-option" value="Browse"><?= $form ?></option>
        <option class="search-form__select-option" value="Browse"><?= $form ?></option>
      </select>
      <input class="search-form__input" type="text" name="search" placeholder="Search for Item..." autofocus>
      <button class="search-form__button" type="submit"><i class="fas fa-search"></i></button>
    </form>
    <a class="basket" href="#"><img src="img/basket.svg" alt="basket" width="32" height="29"></a>
    <select class="header__select" title="shop">
      <option class="header__select-option" value="My Account"><?= $account ?></option>
      <option class="header__select-option" value="My Account"><?= $account ?></option>
    </select>
  </header>

