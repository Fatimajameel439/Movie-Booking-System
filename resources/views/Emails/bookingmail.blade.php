<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            color: #333333;
        }
        .content p {
            line-height: 1.6;
            color: #555555;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .details-table th, .details-table td {
            padding: 10px;
            border: 1px solid #dddddd;
            text-align: left;
        }
        .details-table th {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #777777;
            font-size: 14px;
        }
        .token {
            font-size: 24px;
            color: #d9534f;
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
            border: 2px dashed #d9534f;
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Booking Confirmation</h1>
        </div>
        <div class="content">
            <h2>Dear {{ $bookingdetails['user_name'] }},</h2>
            <p>Thank you for your booking! Here are your booking details:</p>
            <div class="token">
                Booking Token: {{$bookingdetails['booking_token']}}
            </div>
            <table class="details-table">
                <tr>
                    <th>Movie Name</th>
                    <td>{{ $bookingdetails['movie_name']}}</td>
                </tr>
                <tr>
                    <th>Theater</th>
                    <td>{{$bookingdetails['theater_name']}}</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>{{ $bookingdetails['show_date']}}</td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>{{ $bookingdetails['show_time']}}</td>
                </tr>
                
                
            </table>
            <p>If you have any questions or need to make changes to your booking, please contact our support team at zomovo@gmail.com.</p>
            <p>We hope you enjoy the movie!</p>
            <p>Best regards,</p>
            <p>Zmovo Movies</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 Zmovo Movies. All rights reserved.</p>
            <p>This email was sent to  {{ $bookingdetails['user_email'] }}. If you no longer wish to receive emails from us, you can <a href="#">unsubscribe</a>.</p>
        </div>
    </div>
</body>
</html>
