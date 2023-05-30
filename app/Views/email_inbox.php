<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Email App made in CodeIgniter 4</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <style>
    html,
    body {
        min-height: 100vh;
        padding: 0;
        margin: 0;
        font-family: Roboto, Arial, sans-serif;
        font-size: 14px;
        color: #666;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        background: #5a7233;
    }

    table {
        background: #fff;
        border-collapse: collapse;
        width: 100%;
        max-width: 600px;
    }

    table td,
    table th {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        color: #333;
    }

    table th {
        background: #5a7233;
        color: #fff;
    }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($email as $row) { ?>
            <tr>
                <td><?php echo $row['sender_email']; ?></td>
                <td><?php echo $row['receiver_email']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td>
                    <a href="<?php echo base_url('email/update/' . $row['id']); ?>">Update</a>
                    <a href="<?php echo base_url('email/delete/' . $row['id']); ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
            <tr>
                <td><a type="submit" href="/">Back</a></td>
            </tr>
        </tbody>
    </table>
</body>


</html>