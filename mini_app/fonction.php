<?php
function verifier_champs(string $n, int $p, int $q)
{
    if (!empty($n) && !empty($p) && !empty($q))
        return true;
    else
        return false;

}
function verifier_type(int $p, int $q)
{
    if(is_numeric($p) && is_numeric($q) && $p >= 500 && $q >0)
      return true;
    else
      return false;
}
?>