<?php
// $csvString - ���, ��� ������ Comma Separated Value
// ��������� Parse-�� ����, ���� �� ������� �� �����������
// � ����� ���������� ��������
// input - "rado,vlado,rado,vlado"
// output - �����, ����� ������� ���������� �������� [rado, vlado]
function parseUniqueCSV($csvString) {
  if(!empty($csvString)) {
    return array_unique(explode(",", $csvString));
  }
}

// $string - ���, �������� ������� ���������.
// $replaceMap - ����������� ����� �� ���� $key=>$value
// $key � $value �� ������.
// ��������� �������� ����� ������� �� $key � $string � $value
// input - "Python is cool", ["Python" => "PHP", "cool" => "cooler"]
// output - "PHP is cooler"
function replace($string, $replaceMap) {
  if(!empty($replaceMap)) {
    return str_replace(array_keys($replaceMap), array_values($replaceMap), $string);
  }
}

function contains($str, $content){
    return strpos($content, $str) ? true : false;
}

// $arrayOfFiles - ����� �� ������, ����� ������������� ��� �� ����
// ��������� ������ �� ����� ����������� �����, ������
// $key � ����� �� �����, � $value � ������������ ��
// input - ["omg.jpg", "wtf.mp3", "asd.txt"]
// output - ["omg" => "jpg", "wtf" => "mp3", "asd" => "txt"]
function extensions($arrayOfFiles) {
  if(!empty($arrayOfFiles)) {
    $res = array();
    foreach($arrayOfFiles as $value) {
      if(contains(".", $value)) {
	$tmp = explode('.', $value);
	$res[$tmp[0]] = $tmp[1];
      }
    }
    return $res;
  }
}

// $alphabet - ����� �� �����
// $length - ��������� �� ������������ ������
// ��������� ������ �� �������� ������
// ��� �������� ����� �� $alphabet
// � ������� $length
// input - password(array("a","b","c","d","$","#"),  4)
// output - "d$#a" (���� �� ��� ����������)
function password($alphabet, $length) {
  if((!empty($alphabet)) && $length >= 0) {
    $res = "";
    for($i=0; $i<$length; $i++) {
      $res .= $alphabet[rand(0, count($alphabet)-1)];
    }
  return $res;
  }
}
?>
