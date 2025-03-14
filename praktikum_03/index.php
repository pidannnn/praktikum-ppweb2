<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Selamat Datang di Perpustakaan STT-NF</h2>
        <p>Silahkan isi buku tamu di bawah ini</p>
        <hr />

        <form method="POST" action="kunjungan.php">
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="fullname" name="fullname" type="text" class="form-control" aria-describedby="textHelpBlock" required="required">
                    <span id="textHelpBlock" class="form-text text-muted">Isi nama lengkap kamu.</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" aria-describedby="emailHelpBlock" required="required">
                    <span id="emailHelpBlock" class="form-text text-muted">Isi dengan email aktif kamu.</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="textarea" class="col-4 col-form-label">Keperluan</label>
                <div class="col-8">
                    <textarea id="message" name="message" cols="40" rows="5" class="form-control" aria-describedby="textareaHelpBlock"></textarea>
                    <span id="textareaHelpBlock" class="form-text text-muted">Tulis keperluan kamu untuk mengunjungi perpustakaan.</span>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>
</body>

</html>