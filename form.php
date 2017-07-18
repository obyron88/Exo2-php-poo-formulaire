<?php
class Form{

  public function startform(){
    return ('<form action="#" method="post">');
  }
  public function input($placeholder){
    return ('<input placeholder="'.$placeholder.'" type="text" name="" value=""><br>');
  }
  public function select($option1, $option2, $option3){
    return ('<select value="">
    <option value="">'.$option1.'</option>
    <option value="">'.$option2.'</option>
    <option value="">'.$option3.'</option>
    </select><br>');
  }
  public function submit($button){
    return ('<button type="submit">'.$button.'</button><br>');
  }
  public function textarea($textarea){
    return ('<textarea placeholder="'.$textarea.'"value=""></textarea><br>');
  }
  public function radio(){
    return ('<input type="radio" value=""><br>');
  }
  public function checkbox(){
    return ('<input type="checkbox" value="">');
  }
  public function endform(){
    return ('</form>');
  }
}

class Html{

  public function meta(){
    return ('<meta charset="utf-8">');
  }
  public function css(){
    return ('<link rel="stylesheet" href="style.css">');
  }
  public function jquery(){
    return ('<script src="jquery.js"></script>');
  }
  public function jqueryui(){
    return ('<script src="jquery-ui.min.js"></script>');
  }
  public function scriptjs(){
    return ('<script src="script.js"></script>');
  }
  public function image(){
    return ('<img src="slow-classic-PP-e1430487826466.jpg">');
  }
  public function a($lien, $nomlien){
    return ('<a href="'.$lien.'">'.$nomlien.'</a>');
  }
}

class Validator {


}
