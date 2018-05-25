<?php
  class Firebase_Shortcode {
    private static $initiated = false;

    public static function init() {
      if( ! self::$initiated ){
        self::init_hooks();
      }
    }

    public static function init_hooks() {
      self::$initiated = true;
      add_shortcode('firebase_login', array( 'Firebase_Shortcode', 'firebase_login_func' ));
      add_shortcode('firebase_logout', array( 'Firebase_Shortcode', 'firebase_logout_func' ));
      add_shortcode('firebase_greetings', array( 'Firebase_Shortcode', 'firebase_greetings_func' ));
      add_shortcode('firebase_show', array( 'Firebase_Shortcode', 'firebase_show_func' ));
    }

    public static function firebase_login_func() {
      $html = "";
      $html .= "<form id=login-form'>";
          $html .= "<div>";
              $html .= "<div>";
                  $html .= "<label for='name'>Name</label>";
                  $html .= "<input type='email' name='email'>";
              $html .= "</div>";
          $html .= "</div>";

          $html .= "<div>";
              $html .= "<div>";
                  $html .= "<label for='email'>Email</label>";
                  $html .= "<input type='password' name='password'>";
              $html .= "</div>";
          $html .= "</div>";

          $html .= "<button id='form-submit'>Login</button>";
      $html .= "</form>";
      return $html;
    }

    public static function firebase_logout_func() {
      $html = "";
      $html .= "<button id='firebase-signout'>Sign Out</button>";
      return $html;
    }

    public static function firebase_greetings_func() {
      $html = "";
      $html .= "<div id='firebase-user'></div>";
      return $html;
    }

    public static function firebase_show_func($atts) {
      $html = "";
      $html .= "<div id='firebase-user'>";
      $html .= $atts['content'];
      $html .= "</div>";
      return $html;
    }
  }
?>
