
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>    

    <div class="py-12"inset>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-black border-b border-black-200">
                    <div class="child" style=>Kamu Berhasil Login!</div>
                                        </div>
                </div>                
                <div class="menu">
                    <div class="kendaraan"><a href="laporan_kendaraan">Kendaraan</a></div>
                    <div class="mall"><a href="/mall">Mall</a></div>
                    <div class="laporan"><a href="/laporan">Laporan</a></div>
                    <div class="user"><a href="/user">User</a></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>        
    .menu .kendaraan {
        color: white;
        background-color:black;
        margin-left: 20px;
        text-align: center;
        font-size: 30px;        
        width: 40%;
        height: 50px;         
        float: left;       
    }    

    .menu .mall {
        color: white;
        background-color: black; 
        margin-left: 42%;
        text-align: center;        
        font-size: 30px;                        
        width: 40%;
        height: 50px;               
    }

    .menu .laporan {
        color: white;
        background-color: black; 
        margin-top: 5px;
        margin-left: 20px;
        text-align: center;        
        font-size: 30px;                        
        width: 40%;
        height: 50px; 
        float: left; 
    }

    .menu .user {
        color: white;
        background-color: black;         
        margin-top: 5px;
        margin-left: 42%;
        text-align: center;        
        font-size: 30px;                        
        width: 40%;
        height: 50px; 
    }   
    .child {
         font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-size: 34px;
         font-weight: bold;
         margin: 0 auto;
}
</style>
