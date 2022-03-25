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

function work_build($work) {
  foreach ($work as $item) {
    echo "<div class='col-block service-item' data-aos='fade-up'>
            <div class='service-icon'>
                <i class='icon-{$item->icon}'></i>
            </div>
            <div class='service-text'>
                <h3 class='h2'>{$item->head}</h3>
                {$item->innr}
            </div>
        </div>";
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
?>