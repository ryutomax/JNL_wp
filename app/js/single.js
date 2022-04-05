// singleページ専用

// =============================
//正規表現 [カスタムフィールド（表）]
// =============================

var str = document.getElementById("tableTtl").innerHTML;
str = str.replace(/＜(.*?)＞/g,'<br><b class="p-detail-tableTtl">＜$1＞</b>');
document.getElementById("tableTtl").innerHTML = str

var str = document.getElementById("tableTtl2").innerHTML;
str = str.replace(/＜(.*?)＞/g,'<br><b class="p-detail-tableTtl">＜$1＞</b>');
document.getElementById("tableTtl2").innerHTML = str;

//正規表現 end ////////////////////////////////////