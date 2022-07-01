<!DOCTYPE html>
<html lang="en">
<head>
    <title>FashionShop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
</head>

<div class="space50">&nbsp;</div>
<div class="container beta-relative">
    <div class="pull-left">
        <h2>Add food </h2>
    </div>
    <div class="space50">&nbsp;</div>
   
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for='inputName'>Name: </label>
                <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Enter name"
                    >
            </div>

            <div class="form-group">
                <label for='inputPrice'>Price</label>
                <input type="number" class="form-control" name="inputPrice" id="inputPrice"
                    placeholder="Enter price" >
            </div>
            <div class="form-group">
                <label for='inputOldPrice'>OldPrice</label>
                <input type="number" class="form-control" name="inputOldPrice" id="inputOldPrice"
                    placeholder="Enter oldprice" >
            </div>

            <!-- <div class="form-group">
                <label for='inputImage'>Image</label>
                <input type="text" class="form-control" name="inputImage" id="inputImage" placeholder="Enter link image"
                   >
            </div> -->
            <div class="form-group">
                <label for='inputImage'>Image file</label>
                <input type="text" class="form-control-file" name="inputImage" id="inputImage" required>
            </div>

            
            <div class="form-group">
                <label for='inputDescription'>Description</label>
                <textarea name="inputDescription" rows="4" cols="100"></textarea>
                <script>
                CKEDITOR.replace('inputDescription');
                </script>
            </div>
            <div>@include('error')</div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <div class="space50">&nbsp;</div>
</div>
