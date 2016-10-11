<?php
include './phpanalysis.class.php';
$pa = new PhpAnalysis();
$pa->SetSource("营养素（nutrient）是可给人体提供能量、构成机体、组织修复以及具有生理调节功能的化学成分。凡是能维持人体健康以及提供生长、发育和劳动所需要的各种物质都称之为营养素。人体所必需的营养素有蛋白质、脂类、糖类、维生素、水和无机盐（矿物质）、膳食纤维（纤维素）7类、还包含许多非必需营养素。我们日常的所有食物都属于营养素，例如粗粮富含B族维生素，肉类富含蛋白质和矿物质，水果蔬菜富含水和各类维生素，可以说所有的动物、植物都是依赖营养素而生存的。 ");
$pa->SetSource('关于营养素的调理补充十八大误区！');
$pa->resultType = 2;
// $pa::$loadInit  = false;
// $pa->LoadDict();
// $pa->DifferMax = true;
$pa->StartAnalysis(false);

// 获得最终全部分词结果
echo "<pre>";
print_r($pa->GetFinallyResult(','));
echo "</pre>\r\n";

// 获得粗分结果
echo "<pre>";
print_r($pa->GetSimpleResult());
echo "</pre>\r\n";

// 获得包含属性信息的粗分结果
echo "<pre>";
print_r($pa->GetSimpleResultAll());
echo "</pre>\r\n";

// 函数说明：获取出现频率最高的指定词条数（通常用于提取文档关键字）
// 参数列表：$num = 10 返回词条个数
echo "<pre>";
var_dump($pa->GetFinallyKeywords(10));
echo "</pre>\r\n";

// 获取hash索引数组
echo "<pre>";
print_r($pa->GetFinallyIndex());
echo "</pre>";

// 把文本文件词库编译成词典
// public function MakeDict( $source_file, $target_file='' )
// $source_file 源文本文件
// $target_file 目标文件(如果不指定，则为当前词典)
// echo "<pre>";
// print_r($pa->MakeDict());
// echo "</pre>";

// 导出当前词典全部词条为文本文件
//public function ExportDict( $targetfile )
// echo "<pre>";
// print_r($pa->ExportDict('./a.txt'));
// echo "</pre>";

?>