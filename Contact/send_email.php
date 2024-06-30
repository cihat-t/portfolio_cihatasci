<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // E-posta gönderimi için gerekli bilgiler
    $to = "cihat.tsci@gmail.com"; // E-posta alıcısı
    $subject = "İletişim Formu Mesajı"; // E-posta konusu

    // E-posta içeriği oluşturma
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Message:\n$message\n";

    // E-posta başlıkları
    $headers = "From: $name <$email>";

    // E-postayı gönder
    if (mail($to, $subject, $email_content, $headers)) {
        echo "E-posta başarıyla gönderildi.";
    } else {
        echo "E-posta gönderirken bir hata oluştu.";
    }
} else {
    echo "Bu sayfaya doğrudan erişim yapılamaz.";
}
?>