<?php
if(Session()->get('username')=="") {
    return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
}
?>
@include('siswa/layout/head')
@include('siswa/layout/header')
@include('siswa/layout/menu')
@include($content)
@include('siswa/layout/footer')
