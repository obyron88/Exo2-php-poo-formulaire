<?php
class Form{

  public function startform(){
    return ('<form action="#" method="post">');
  }
  public function input(){
    return ('<input placeholder="e-mail" type="text" name="email" value=""><br>');
  }
  public function select($option1, $option2, $option3){
    return ('<select name="sel" value="">
    <option  value="'.$option1.''.$option1.'">'.$option1.'</option>
    <option  value="'.$option2.'">'.$option2.'</option>
    <option  value="'.$option3.'">'.$option3.'</option>
    </select><br>');
  }
  public function submit($button){
    return ('<button type="submit">'.$button.'</button><br>');
  }
  public function textarea(){
    return ('<textarea name="sauce" placeholder="Quelle sauce ?"value=""></textarea><br>');
  }
  public function radio(){
    return ('<input name="rad" type="radio" value=""><br>');
  }
  public function checkbox(){
    return ('<input name="check" type="checkbox" value="">');
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
    return ('<img src="slow-classic-PP-e1430487826466.jpg"><br>');
  }
  public function a($lien, $nomlien){
    return ('<a href="'.$lien.'">'.$nomlien.'</a>');
  }
}

class Validator {
  // Vérifie si une valeur est égale à une autre
  // Passe les 2 valeurs directement en paramètre.
  public static function isEqual($value1, $value2)
  {
      return $value1 === $value2;
  }

  //Vérifie si une valeur est égale à zéro
  public static function notZero($value)
  {
      return $value !== 0;
  }

  // Vérifie que le mail est valide
  public static function isValidMail($uu)
  {
      return filter_var($uu, FILTER_VALIDATE_EMAIL);
  }

  // Vérifie que ce soit bien un entier
  public static function isInt($int)
  {
      return filter_var($int, FILTER_VALIDATE_INT);
  }

  // Vérifie que ce soit bien un float (ou int)
  public static function isFloat($float)
  {
      return filter_var($float, FILTER_VALIDATE_FLOAT);
  }

  // Vérifie que l'image envoyé est bien un "jpg"
  // public static function isJpg($index)
  // {
  //     if(is_uploaded_file(($_FILES[$index]['tmp_name'])) {
  //         $path_parts = pathinfo($_FILES[$index]['name']);
  //         return $path_parts['extension'] === 'jpg';
  //     }
  //     else throw new Exception('Mec, c\'est pas une image ça !');
  // }

}
