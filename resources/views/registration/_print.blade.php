<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container w-100 mt-5">
        <div class="card border-primary mb-3" style="max-width: 100rem;">
            <div class="card-header">Info Pendaftaran</div>
            <div class="card-body">
            <form method="POST">
                <fieldset class="form-group">
                    <h5>Nama Lengkap</h5>
                    <h6>{{ $registration['name'] }}</h6>

                </fieldset>
                <fieldset class="form-group">
                    <h5>Alamat Lengkap</h5>
                    <p>{{ $registration['address'] }}</p>

                </fieldset>
                <fieldset class="form-group">
                    <h5>Asal Sekolah</h5>
                    <p>{{ $registration['from_jhs'] }}</p>

                </fieldset>
                <fieldset class="form-group">
                    <h5>Jenis Kelamin</h5>
                    <p>{{ $registration['gender'] }} </p>

                </fieldset>
                <fieldset class="form-group">
                    <h5>Agama</h5>
                    <p>{{ $registration['religion'] }}</p>

                </fieldset>
                <fieldset class="form-group">
                    <h5>Jurusan</h5>
                    <p>{{ $registration['major'] }}</p>
                </fieldset>
            </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
            window.print()
        </script>
    </div>
</body>
</html>
