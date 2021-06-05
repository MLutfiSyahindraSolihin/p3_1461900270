<!DOCTYPE html> 
<html> 
    <head> 
    </head> 
    
    <body>  
        <h3>Data Rumah Sakit</h3> 
        <a href="{{url('/home')}}"> Kembali</a> 
        <br/> 
        <br/> 
        
        <form action="" method="post">
            {{ csrf_field() }} 
            Nama :     <input type="text" name="nama_pasien" required="required"> 
            <br /> 
            Alamat  <textarea name="alamat" required="required"></textarea> 
            <br /> 
            <input type="submit" value="Simpan Data"> 
        </form> 
    </body> 
</html>