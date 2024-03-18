<!DOCTYPE html>
<html>
<head>
    <title>Booking Success</title>
</head>
<body>
<h2>Booking Success Notification</h2>
<p>Dear Admin,</p>

<p>vừa có một đơn đặt hàng vận chuyển mới!</p>

<p>Booking Details:</p>
<ul>
    <li>Name: {{ $bookingForm->name ?? ''}}</li>
    <li>Email: {{ $bookingForm->email  ?? ''}}</li>
    <li>Phone: {{ $bookingForm->phone  ?? ''}}</li>
    <li>Weight: {{ $bookingForm->weight  ?? ''}}</li>
    <li>Size: {{ $bookingForm->size  ?? ''}}</li>
    <li>Destination: {{ $bookingForm->diem_den  ?? ''}}</li>
    <li>Departure: {{ $bookingForm->diem_di  ?? ''}}</li>
    <li>Shipping Method: {{ $bookingForm->shipping_method  ?? ''}}</li>
</ul>

<p>Thank you for choosing our services!</p>

<p>Best regards,<br>Your Company</p>
</body>
</html>
