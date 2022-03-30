<?php

function styles_build($styles) {
  foreach ($styles as $style) {
    echo "<link rel='stylesheet' href='{$style}'>";
  }
}

function scripts_build($scripts) {
  foreach ($scripts as $script) {
    echo "<script src='{$script}'></script>";
  }
}

function nav_build($nav) {
  foreach ($nav as $name => $link) {
    $current = strpos($_SERVER['REQUEST_URI'], $link) ? " current" : "";

    echo "<li class='{$current}'>
            <a href='/{$link}/' title='home'>{$name}</a>
          </li>";
  }
}

function prtn_build($prtnrs) {
  foreach ($prtnrs as $prtnr) {
    echo "<a href='http://{$prtnr}.com' title='{$prtnr}' title='{$prtnr} logo' class='clients__slide'><img src='/images/prtnrs/test.png'></a>";
  }
}

function work_build($work) {
  foreach ($work as $item) {
    echo "<li>{$item->innr}</li>";
  }
}

function help_build($help) {
  foreach ($help as $item) {
    echo "<div class='testimonials__slide'>
            <p>
              <span class='h2'>{$item->head}</span><br>
              {$item->body}
            </p>
          </div>";
  }
}

function cont_build($cont) {
  foreach ($cont as $item) {
    $cols  = $item->tag == 'textarea' ? 'rows="10" cols="50"' : '';

    echo "<div class='form-field'>
              <{$item->tag} name='{$item->name}' type='{$item->type}' 
              id='{$item->name}' placeholder='{$item->hold}' 
              aria-required='true' {$cols} class='full-width'>" .
              ($item->tag == 'textarea' ? '</textarea></div>'
       : '</div>');
  }
}

function cookies_build($cookies) {
  foreach ($cookies as $item) {
    echo "<div class='col-six tab-full'>
            <h3>{$item->name}</h3>
            <p>{$item->cont}</p>
          </div>";
  }
}

function althelp_build($help) {
  foreach ($help as $item) {
    $pre_list = explode("<br>", $item->body);
    $list = '';

    foreach ($pre_list as $list_item) {
      $list .= strlen($list_item) ? "<li>{$list_item}</li>" : '';
    }

    echo "<div class='col-twelve tab-full'>
            <h3>{$item->head}</h3>
            <ul>{$list}</ul>
          </div><hr><br>";
  }
}

?>