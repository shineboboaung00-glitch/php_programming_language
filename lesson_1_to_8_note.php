


<?php // lesson_1 ( echo ) — basic Output

// အသုံးပြုပုံ: echo ကို PHP မှာ Browser ပေါ် စာသား သို့မဟုတ် Data များ ရိုက်ထုတ် (Display) ရန် အသုံးပြုသည်။

Example:
echo "hello world";

?>




<?php // lesson_2 ( Variable) — Variable (ကိန်းရှင်များ)

// အသုံးပြုပုံ: PHP မှာ Variable (ကိန်းရှင်) ကြေညာရင် $ ကို ရှေ့က သုံးရသည်။

// မှတ်ချက်: String (စာသား) တွေထဲမှာ $variable_name ကို တိုက်ရိုက် ထည့်ရေးလို့ရသည်။

$name = "Aung Aung"; // String Variable
$age = 20;            // Integer Variable

// Variable တွေကို String ထဲမှာ တိုက်ရိုက် ထည့်သုံးနိုင်ပါတယ်
echo "My name is $name and I am $age years old.";

?>




<?php  // lesson_3 ( Data Type ) — Data Types & Debugging

// အဓိက Data Types များ:

// String: စာသားများ (ဥပမာ - "kyaw")

// Integer: ကိန်းပြည့်များ (ဥပမာ - 610)

// Float: ဒသမကိန်းများ (ဥပမာ - 56.5)

// Boolean: မှန်/မှား (true သို့မဟုတ် false)

// var_dump() Functions: Variable ရဲ့ Data Type နဲ့ တန်ဖိုးကို စစ်ဆေးကြည့်ရှုရန် သုံးသည်။

$price = 1500;          // Integer (ကိန်းပြည့်)
$tax = 0.05;            // Float (ဒသမကိန်း)
$is_available = true;   // Boolean (မှန်/မှား)

// var_dump() နဲ့ Data Type ကို စစ်ဆေးခြင်း
var_dump($price);           // Output: int(1500)
var_dump($is_available);    // Output: bool(true)

?>




<?php // Lesson_4 ( Arithmetic Operators ) — Arithmetic Operators (သင်္ချာ တွက်ချက်မှုများ)

// + (Addition): ပေါင်းခြင်း ($x + $y)

// - (Subtraction): နှုတ်ခြင်း ($x - $y)

// * (Multiplication): မြှောက်ခြင်း ($x * $y)

// / (Division): စားခြင်း ($x / $y)

// % (Modulus): အကြွင်းရှာခြင်း ($x % $y)

// ** (Exponentiation): ထပ်ညွှန်း / အမျှောက် ($x ** $y)

$item1 = 10;
$item2 = 3;

echo $item1 + $item2; // ပေါင်းခြင်း -> 13
echo $item1 % $item2; // အကြွင်းရှာခြင်း -> 1 (10 ကို 3 နဲ့စားရင် 1 ကြွင်း)
echo $item1 ** $item2; // ထပ်ညွှန်း -> 1000 (10 ထပ်ညွှန်း 3)

?>




<?php // lesson_5 ( Comparison Operators ) — Comparison Operators (နှိုင်းယှဉ်ရေး သင်္ကေတများ)

// == တန်ဖိုး တူ/မတူ စစ်ခြင်း

// != မတူဘူးလား စစ်ခြင်း

// < / > ငယ်သလား / ကြီးသလား စစ်ခြင်း

// <= ( ငယ်သလား သို့မဟုတ် တူသလား ) စစ်ခြင်း

// >= (ကြီးသလား သို့မဟုတ် တူသလား ) စစ်ခြင်း


$x = 50;
$y = 50;

// Comparison (နှိုင်းယှဉ်ခြင်း)
var_dump($x <= $y); // true (50 သည် 50 ထက် ငယ်သည် သို့မဟုတ် တူသည်)

?>




<?php // lesson_6 ( Assignment Operators ) — Assignment Operators (တန်ဖိုး အစားထိုးခြင်း)

// += Operator: $x += $y ဆိုသည်မှာ $x = $x + $y နှင့် အတူတူဖြစ်သည်။

// ရလဒ်: $x တန်ဖိုးထဲသို့ $y ကို ပေါင်းထည့်ပြီး အသစ်ပြန်သိမ်းသွားသည်။

$score = 10;

$score += 5; // $score = $score + 5 နဲ့ အတူတူပဲဖြစ်ပါတယ်
echo $score; // Output: 15

?>




<?php // lesson_7 ( Logical Operators ) — Logical Operators (ယုတ္တိဗေဒ စစ်ဆေးခြင်း)

// && (AND): နှစ်ခုစလုံး True ဖြစ်မှ True ရမည်။

// || (OR): တစ်ခုခု True ဖြစ်ရုံဖြင့် True ရမည်။

$has_pass_exam = true;
$has_money = false;

// && (AND) -> နှစ်ခုလုံး မှန်မှ true ရမည်
var_dump($has_pass_exam && $has_money); // Output: bool(false)

// || (OR) -> တစ်ခုခု မှန်ရင် true ရမည်
var_dump($has_pass_exam || $has_money); // Output: bool(true)

?>




<?php // lesson_8 ( Conditional Statements ) — Conditional Statements (အခြေအနေစစ် ဆုံးဖြတ်ချက်များ)

// if: အခြေအနေ မှန်ရင် လုပ်မည်။

// if...else: အခြေအနေ မှန်ရင် တစ်မျိုး၊ မှားရင် နောက်တစ်မျိုး လုပ်မည်။

// if...else if...else: အခြေအနေ အများအပြားကို အစဉ်လိုက် စစ်ဆေးမည်။

$marks = 75;

if ($marks >= 80) {
    echo "Distinction"; // ဂုဏ်ထူး
} else if ($marks >= 40) {
    echo "Passed";      // အောင်တယ်
} else {
    echo "Failed";      // ကျတယ်
}
// Output: Passed

?>