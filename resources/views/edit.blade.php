<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EDIT</title>
    </head>
  
    <div class="upperflex">
    <p>images</p>
@foreach($posts->images as $img)
<form action="/deleteimage/{{$img->id}}" method="post">
<button class="btn text-danger">X</button>
@csrf 
@method('delete')
</form>
<img src="/images/{{$img->image}}" class="img-responsiveness" style="max-height:100px;max-width: 100px;" alt="" src="">
@endforeach
    </div>
    <div class="home">
  <a href="/display">display</a>
  </div>
<div class="flex">
<div class="header">
</div>
<div class="outer">
<form action="/update/{{$posts->id}}" method="post" enctype="multipart/form-data">
 @csrf
{{ method_field('PUT') }} 
<div class="row">
 <label>Make</label>
 <select  id="s1"name="carmake" onchange="change('s1','s2')" required>
<option value={{$posts->carmake}}>{{$posts->carmake}}</option>
<option value={{$posts->carmodel}} >{{$posts->carmodel}}</option>
<option value="Audi">Audi</option>
<option value="BMW">BMW</option>
<option value="Honda">Honda</option>
<option value="Isuzu">Isuzu</option>
<option value="Mercedes">Mercedes Benz</option>
<option value="Mitsubishi">Mitsubishi</option>
<option value="Mahindra">Mahindra</option>
<option value="Peouget">Peouget</option>
<option value="Lexus">Lexus</option>
<option value="Alfa Romeo">Alfa Romeo</option>
<option value="Ford">Ford</option>
<option value="Jaguar">Jaguar</option>
<option value="Daihatsu">Daihatsu</option>
<option value="Hyundai">Hyundai</option>
<option value="Jeep">Jeep</option>
<option value="Kia">Kia</option>
<option value="Land Rover">Land Rover</option>
<option value="Lexus">Lexus</option>
<option value="Mazda">Mazda</option>
<option value="Nissan">Nissan</option>
<option value="Subaru">Subaru</option>
<option value="Suzuki">Suzuki</option>
<option value="Volvo">Volvo</option>
<option value="Volkswagen">Volkswagen</option>

   </select>
  </div>
   <div class="row">
 <label>Model</label>
 <select name="carmodel" id="s2" onchange="fn()" required>
  <option value={{$posts->carmodel}} >{{$posts->carmodel}}</option>
  </select>
  <br>

 </div>
   <div class="row">
 <label>Year</label>
 <select name="yearofmanufacture" {{$posts->carmake}} required>

 @for($i=1970;$i<2022;$i++)
 <option value={{$posts->yearofmanufacture}}>{{$posts->yearofmanufacture}}</option>
 <option value={{$i}}>{{$i}}</option>
@endfor
 </select><br>
 </div>

   <div class="row">
 <label>Mileage</label>
 <select name="mileage" required>
  <option value={{$posts->mileage}}> {{$posts->mileage}}</option>
  @for($i=1000;$i<10000;$i++)
<option value={{$i}}>{{$i}}</option>
@endfor
 </select><br>
 </div>

 <div class="row">
 <label>Engine</label>
 <select name="engine" required> 
  <option value= {{$posts->engine}}>{{$posts->engine}}</option>
  <option value="Diesel">Diesel</option>
  <option value="Petrol">Petrol</option>
  <option value="Electric">Electric</option>
 </select>
 </div>

 <div class="row">
 <label>Transmission</label>
 <select name="transmission" required> 
  <option value={{$posts->transmission}}>{{$posts->transmission}}</option>
  <option value="Manual">Manual</option>
  <option value="Automatic">Automatic</option>
 </select> <br> 
 </div>
 <div class="row">
 <label>Color</label>
 <input type="text" placeholder="color" name='color' value={{$posts->color}} required><br>
  </div>
  <div class="row">
 <label>Price</label>
 <input type="text" placeholder="price" name="price"  value={{$posts->price}} required><br>
 </div>
   <div class="row">
 <label>Location</label>
 <select name="location" required> 
  <option value={{$posts->location}}  >None</option>
  <option value="Nairobi">nairobi</option>
  <option value="Central">Central</option>
  <option value="Mombasa">Mombasa</option>
  <option value="Nakuru">Nakuru</option>
  <option value="Eastern">Eastern</option>
  <option value="Kajiado">Kajiado</option>
  <option value="Kakamega">Kakamega</option>
  <option value="Kiambu">Kiambu</option>
  <option value="Kericho">Kericho</option>
  <option value="Kisii">Kisii</option>
  <option value="Kisumu">Kisumu</option>
  <option value="Laikipia">Laikipia</option>
  <option value="Machakos">Machakos</option>
  <option value="Meru">Meru</option>  
  <option value="western">western</option>
  <option value="Abroad">Abroad</option>
  <option value="Other-areas">Other Areas</option>
</select>
 </div>
   <div class="row">
 <label>Description</label>
 <input type="textarea" placeholder="description" value={{$posts->description}} name="description"><br>
 </div>
 <div class="row">
 <label>Condition</label>
 <select name="condition" required>
 <option value={{$posts->condition}}">{{$posts->condition}}</option>
<option value="used">used</option>
<option value="new">new</option>
 </select>
 </div>
 <div class="row">
 <label>Bodytype</label>
 <select name="bodytype" required>
<option value={{$posts->bodytype}}>{{$posts->bodytype}}</option>
<option value="Sedan">Sedan </option>
<option value="Coupe">Coupe</option>
<option value="Hatchback">Hatchback</option>
<option value="SUV">SUV</option>
<option value="Pickup">Pickup</option>
<option value="Van">Van</option>
<option value="Minivan">Minivan</option>
<option value="Wagon">wagon</option>
<option value="Convertible">Convertible</option>
<option value="Bus">Bus</option>
<option value="Truck">Truck</option>
</select><br>
</div>
 <div class="row">
 <label>Duty </label>
 <input type="text" placeholder="duty" name='duty' value={{$posts->duty}} ><br>
  </div>
   <div class="row">
 <label>Interior</label>
 <input type="text" placeholder="carmodel" name="interior"  value={{$posts->interior}}  ><br>
 </div>
</div>
<div class="inner">
 <div class="row">
 <label>Airbag</label>
 <input type="checkbox" name="airbag" {{ (isset($posts->airbag)) ? "checked":"" }} >
 </div>
 <div class="row">
 <label>Electric Mirrors</label>
 <input type="checkbox" name="electricmirrors" {{ (isset($posts->electricmirrors)) ? "checked":"" }} >
 </div>
 <div class="row">
 <label>Traction Control</label>
 <input type="checkbox" name="tractioncontrol"  {{ (isset($posts->tractioncontrol)) ? "checked":"" }} >
 </div>
 <div class="row">
 <label>Air Conditioning</label>
 <input type="checkbox" name="airconditioning" {{ (isset($posts->airconditioning)) ? "checked":"" }} >
 </div>
 <div class="row">
 <label>Power Steering</label>
 <input type="checkbox" name="powersteering"  {{ (isset($posts->powersteering)) ? "checked":"" }} >
 </div>
 <div class="row">
 <label>AM/FM Radio</label>
 <input type="checkbox" placeholder="amfmradio" name="amfmradio"  {{ (isset($posts->amfmradio)) ? "checked":"" }} >
 </div>
 <div class="row">
 <label>Front Fog Lamps</label>
 <input type="checkbox" name="frontfoglamps" {{ (isset($posts->frontfoglamps)) ? "checked":"" }} >
 </div>
 <div class="row">
 <label>Electric Windows</label>
 <input type="checkbox" name="electricwindows"  {{ (isset($posts->electricwindows)) ? "checked":"" }} >
 </div>
 <div class="row">
 <label>Alloy Wheels</label>
 <input type="checkbox" name="alloywheels"  {{ (isset($posts->alloywheels)) ? "checked":"" }} >
 </div>
 <div class="row">
 <label>Fog Lights</label>
 <input type="checkbox" name="FogLights"  {{ (isset($posts->FogLights)) ? "checked":"" }} >
 </div>
 <div class="row">
 <label>Thumb startignition</label>
 <input type="checkbox" name="thumbstart" {{ (isset($posts->thumbstart)) ? "checked":"" }} >
 </div>


 <div class="row">
  <label>Upload Photos</label>
 @csrf
 <div class="row">
<label >Cover Image</label>
<input type="file"  name="cover">
  </div>
 <div class="row">
<label>Images</label>
 <input type="file" name="images[]" multiple>
 </div>
 <div class="row">
 <label></label>
 <button class="submit" type="submit">Submit Data</button>
 </div>
<p>Each picture must not exceed 5 Mb Supported formats are *.jpg, *.gif and *.png Advert should contain from 1 to 12 images</p>
</div>
</div>


 </form>
 </div>
</div>
<style>
  /**/
.submit{
  font-weight: bold;
  font-size: 16px;
}
.row p{
  font-size: 10px;
}
.upload{
margin-left:100px;
}
.form-input{
width:250px;
background-color:#fff;
}
.form-input .input{
display:none;
}
.form-input label{
display:block;
width: 250px;;
height:70px;
line-height:70px;
text-align:center;
background-color:#333;
color:#fff;
font-size:100px;
text-transform:uppercase;
font-weight:600;
cursor:pointer;
}
.form-input img{
width:100%;
height: 200px;
display:none;
margin-top:10px;
}
  /**/
.header{
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.home>a{
    width:200px;
    padding: 5px;
    background-color: wheat;
    text-align: center;
    font-size:15px;
    margin-top: 5px;
    margin-bottom: 5px;
    list-style-type:none;
    border-radius:5px;
    box-shadow: 2px 2px 2px currentColor;
    text-decoration: none;
    }
.home{
  width: 80%;
  height: 45px;
  margin: 0 auto;
  background-color:transparent;
  line-height: 45px;
text-align: center;
    border-bottom: 1px solid ivory;
}
.theform{
  display: flex;
  margin: auto;
}
 *,
     ::after,
     ::before
     {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
        font-family:montserrat;
     }
      body
     {
     background-color:rgb(90, 2, 2);
     color:wheat;
  
     }
     .flex{
     display:flex;
     flex-direction:row;
     justify-content:center;
     margin-top:10px;
     }
     .theform{
     width: 450px;
     display:table;
     padding:20px;
     background-color:#2c8F77;
     border:solid 2px #000;
     }
     .row{
     display:table-row;
     }
     .row label{
     display:table-cell;
     padding:10px;
     text-align:right;
     padding:10px;
     }
     .row input{
     display:table-cell;
     padding:10px;
     margin-top:10px;
     font-family:montserrat;
     }
     .row button{
     display:table-cell;
     padding:2px;
     padding:5px 40px;
     margin-top:10px;
     cursor:pointer;
     outline:none;
     border:none;
     }
     .login{
       font-family: montserrat;
         font-size:20px;
         margin-top:20px;
     
     }
 .login>a{
         color: wheat;
         text-decoration: none;
 }
     h1{
         margin-bottom:20px;
     }
.inner{
  height: 500px;
}
.outer{
  display: flex;
  flex-direction: column;
 justify-content: center;
}
.upperflex{
display: flex;
justify-content: center;

}
@media only screen and (max-width:768px) {
  .flex{
     display:flex;
     flex-direction: column;
     }
     .header{
       text-align: center;
     }
	
}
</style>
<script>
 function show(e)
{
if(e.target.files.length>0)
{
var src=URL.createObjectURL(e.target.files[0])
var preview=document.getElementById('file-ip-review')
preview.src=src
preview.style.display="block"
}
}
function fn(){
var s2=document.getElementById('s2').value
console.log(s2)
}
function change(s1,s2)
{
var s1=document.getElementById(s1)
var s2=document.getElementById(s2)
s2.innerHTML="";
if(s1.value==='Toyota'){
var optionarr=['1000|1000','4runner|4runner',
'86|86',
'Allex| Allex',
'Allion| Allion' ,
'Alphard|Alphard',
'Alleza|Alleza',
'Altos|Altos',
'Aqua|Aqua',
'Aristo|Aristo',
'Avalon Avalon',
'Aurion|Aurion',
'Avanza|Avanza',
'Avensis|Avensis',
'Axio|Axio',
'Axion|Axion',
'Aygo| Aygo',
'Belta| Belta',
'Blade|Blade',
'Blizzard| Blizzard',
'Bravis |Bravis',
'Caetano| Caetano',
'Caldina| Caldina',
'Cami| Cami',
'Camry| Camry',
'Carib |Carib',
'Carina |Carina',
'Celica| Celica',
'Celsior|Celsior',
'Chr|chr',
'Chaser|Chaser',
'Coaster| Coaster',
'Condor |Condor',
'Conquest| Conquest',
'Corolla| Corolla',
'Corolla cross| Corolla cross',
'Corona| Corona',
'Corsa |Corsa',
'Cressida |Cressida',
'Cresta| Cresta',
'Crown |Crown',
'Cynos| Cynos',
'Denos |Denos',
'Duet| Duet',
'Dyna |Dyna',
'Echo| Echo',
'Es| Es',
'Estima |Estima',
'Etios| Etios',
'FCH| FCHV',
'Fielder| Fielder',
'Fjcruiser| Fjcruiser' ,
'Fk |FK',
'Fortunner |Fortunner',
'Funcargo |Funcargo',
'FXS|FXS',
'Gaia| Gaia',
'Grand hiace| Grand hiace',
'Granvia|Granvia',
'Gt1| Gt1',
'Harrier| Harrier',
'Hiace| Hiace',
'Highlander| Highlander',
'Hilux| Hilux',
'Hino| Hino',
'Hmv| Hmv',
'Ipsum| Ipsum',
'IQ| IQ',
'ISIS| ISIS',
'IST| IST',
'Obsum| Jobsum' ,
'Kluger |Kluger',
'Landcruiser| Landcruiser',
'Landcruser prado  Landcruser prado',
'Lc70 |Lc70',
'Levin| Levin',
'Lecxen |Lecxen',
'Lite-ace | Lite-ace' ,
'Marind |Marind',
'Mark ii |Mark ii',
'Mark 11 blitx|  Mark 11 blitx',
'Mark x|Mark x',
'Matrix|Matrix',
'Master|Master',
'Mar-s|Mar-s',
'Nadia|Nadia',
'Noah|Noah ',
'Opa|Opa',
'Paseo|Paseo',
'Passo|Passo',
'Picnic|Picnic',
'Platz|Platz',
'Pod|Pod',
'Parte|Parte',
'Premio|Premio',
'Previa|Previa',
'Prius|Prius',
'Proace|Proace',
'Probox|Probox',
'Progress|Progress',
'Publica|Publica',
'Quantum|Quantum',
'Ractis|Ractis',
'Rav4|Rav4',
'Raum|Raum',
'Regis van|Regis van',
'Retro|Retro',
'RSC|RSC',
'Rumion|Rumion',
'Run-x|Run-x',
'Rush|Rush',
'SA|SA',
'Scion|Scion',
'Sequoia Sequoia',
'Sera|Sera',
'Sienna|sienna',
'Sienta|sienta',
'Soarer|soarer',
'Solara|solara',
'Soluna|soluna',
'Spacio|Spacio',
'Spade|Spade',
'Sparkey|Sparkey',
'Sprinter|Sprinter',
'Stallion|Stallion',
'Starlet|Starlet',
'Succeed|Succeed',
'Supra|Supra',
'Surf|Surf',
'T100|T100 ',
'T70|T70',
'Tacoma|Tacoma',
'Tazz|Tazz',
'Tercel|Tercel' ,
'Terrier|Terrier',
'Town ace|Town ace',
'Toyoace|Toyoace',
'TRD|TRD ',
'Tundra|Tundra',
'vanguard|vanguard',
'Vellfire|Vellfire',
'Venture|Venture',
'Venza|Venza',
'Veroza|Veroza',	
'Verso|Verso',
'Vista|Vista',
'Vitz|Vitz',
'Voltz|Voltz' ,
'Voxy|Voxy',
'Will|Will,',
'Windom|Windom',
'Wish|Wish',
'Xyr|Xyr',
'Yaris|Yaris',
'Yaris hatchback|Yaris hatchback'
]
}
if(s1.value==='Audi')
{
var optionarr=[
 '100|100',
 '200|200',
 '4000|4000',
 '50|50',
 '5000|5000',
 '80|80 ',
 '90|90 ',
 'a1|A1 ',
 'a2|A2 ',
 'a3|A3',
 'a4|A4 ',
 'a5|A5 ',
 'a6|A6 ',
 'a7|A7 ',
 'a8|A8 ',
 'q3|Q3 ',
 'q5|Q5',
 'q7|Q7 ',
 'q8|Q8',
 'quattro|Quattro',
 'r8|R8 ',
 'rs-6|RS 6' ,
 's2|S2 ',
 's5|S5',
 's6|S6 ',
 's7|S7 ',
 'sq5|SQ5',
 'tt|tt'
 ]
}
if(s1.value==='Ford')
{
var optionarr=[
'021|021',
 '12|12 ',
 '17|17 ',
 '2000|2000',
 '21|21', 
 '247|24.7',
 '3900|3900',
 '3910|3910',
 '427|427',
 '4600|4600',
 '4610|4610',
' 49|49',
 '4910|4910',
 '5000|5000',
 '5030|5030',
 '5600|5600 ',
 '5610|5610',
 '600|600 ',
 '6610|6610',
 '7610|7610',
 '8210|8210 ',
 'Aerostar|Aerostar',
 'Anglia|Anglia ',
 'Artic|Artic',
 'Aspire|Aspire',
 'Back-Hoe-Loader|Back Hoe Loader',
 'Bantam |Bantam',
 'Bronco|Bronco ',
 'C-Max |C-Max ',
 'Capri|Capri',
 'Coin|Coin ',
 'Consul|Consul',
 'Contour|Contour',
 'Corsair|Corsair ',
 'Cortina|Cortina',
 'Cougar|Cougar ',
 'Courier|Courier' ,
 'Crestline|Crestline',
 'Crown|Crown ',
 'Custom|Custom ',
 'Desert|Desert',
 'E-150|E-150',
 'E-250|E-250',
 'E-350|E-350',
 'E-Ka|E-Ka ',
 'Econoline|Econoline',
 'Econovan|Econovan ',
 'Ecosportecosport',
 'Edge|Edge',
 'Equator|Equator',
 'Escape|Escape ',
 'Escort|Escort',
 'Everest|Everest ',
 'Excursion|Excursion ',
 'Expedition|Expedition',
 'Explorer|Explorer ',
 'Extreme|Extreme',
 'F|F',
 'F-150|F-150',
 'F-250|F-250',
 'F-350|F-350',
 'F-450|F-450',
 'F-650|F-650',
 'Fairlane|Fairlane',
 'Falcon|Falcon',
 'Festiva|Festiva',
 'Fiesta|Fiesta ',
 'Figo|Figo',
 'Five|Five',
 'Five-Hundred|Five-Hundred',
 'Flex|Flex',
 'Focus|Focus',
 'Freda|Freda',
 'Freestar|Freestar',
 'Freestyle|Freestyle',
 'Fusion|Fusion ',
 'Galaxy|Galaxy ',
 'Granada|Granada' ,
 'Gt|GT',
 'Husky|Husky ',
 'Ikon|Ikon',
 'Indigo|Indigo',
 'Ka|Ka',
 'Kuga|Kuga',
 'Laser|Laser',
 'Libre|Libre ',
 'Lotus|Lotus',
 'Lynx|Lynx',
 'Maverick|Maverick',
 'Megastar|Megastar',
 'Meteor|Meteor ',
 'Model|Model',
 'Monarch|Monarch',
 'Mondeo|Mondeo',
 'Mustang|Mustang',
 'Orion|Orion',
 'Pilot|Pilot',
 'Popular|Popular',
 'Prefect|Prefect',
 'Probe|Probe',
 'Puma|Puma',
 'Racing|Racing',
 'Ranchero|Ranchero',
 'Ranger|Ranger ',
 'Royale|Royale',
 'S-Max|S-Max ',
 'Saetta|Saetta',
 'Scorpio|Scorpio ',
 'Sierra|Sierra ',
 'Skyliner|Skyliner ',
 'Sportka|Sportka',
 'Station|Station ',
' Streetka|Streetka',
 'Synergy|Synergy ',
 'T-300|T-300 ',
 'Taunustaunus',
 'Taurus|Taurus',
 'Telstar|Telstar',
 'Tempo|Tempo',
 'Territory|Territory',
 'Thames|Thames',
 'Think|Think' ,
 'Thunderbird|Thunderbird',
 'Tonka|Tonka' ,
 'Torino|Torino',
 'Tourneo|Tourneo',
 'Tracer|Tracer',
 'Transit|Transit',
 'Triton|Triton' ,
 'Urban|Urban ',
 'Vedette|Vedette',
 'Versailles|Versailles',
 'Wind|Wind',
 'Windstar|Windstar ',
 'Zephyr|Zephyr',
 'Zodiac|Zodiac'
 ]
}
if(s1.value==='Honda')
{
var optionarr=['1300|1300',
'599|599',
'919|919',
'Accord| Accord',
'Accord Crosstour Accord Crosstour',
'Acello| Acello',
'Ace125| Ace125',
'Acrura| Acrura',
'Acty| Acty',
'Acura Mdx|acura Mdx',
'Adrenalin| Adrenalin',
'Airwave| Airwave',
'Amaze| Amaze',
'ANF| ANF',
'Ape| Ape',
'Avancier| Avancier',
'Ax-1|Ax-1',
'Ballade| Ballade',
'Benly| Benly',
'Big| Big',
'Br-V|Br-V',
'Brio| Brio',
'C90| C90',
'CA| CA',
'Capa|Capa',
'CB|CB',
'CBR|CBR',
'CBX|CBX',
'CD|CD',
'CG|CG',
'CGL|CGL',
'CH|CH',
'City|City',
'Civic|civic',
'CJ|CJ',
'CL|CL',
'CM|CM',
'Crossroad|Crossroad',
'Crosstour|Crosstour',
'CRX|CRX',
'CT|CT',
'CX|CX',
'Deauville|Deauville',
'Dio|Dio',
'Dn-01|Dn-01',
'Dream|Dream',
'Dylan|Dylan',
'Edix|Edix',
'Element|Element',
'Elite| Elite',
'Elysion| Elysion',
'Express| Express',
'FES| FES',
'Fire| Fire',
'Fit| Fit',
'FJR| FJR',
'FMX| FMX',
'Foresight',
'Forza| Forza',
'Fourtrax| Fourtrax',
'FR-V|FR-V',
'Freed| Freed',
'FSC| FSC',
'FT|FT',
'FTR|FTR',
'Fuya|Fuya',
'Gb|Gb',
'Gl|Gl',
'Goldwing| Goldwing',
'Gorilla| Gorilla',
'Grace| Grace',
'Gyro| Gyro',
'H100| H100',
'Helix| Helix',
'Hornet| Hornet',
'HR-V|HR-V',
'Insight| Insight',
'Inspire| Inspire',
'Integra| Integra',
'Inteceptor|Inteceptor',
'Jade |Jade',
'Jazz|Jazz',
'Lead|Lead',
'Legend|Legend',
'Life|Life',
'Magna|Magna',
'MB5|MB5',
'Metropolitan',
'Millennium|Millennium',
'Mobilio| Mobilio',
'Monkey| Monkey',
'MT|MT',
'MTX|MTX',
'N-Box|N-Box',
'Nighthawk| Nighthawk',
'NR|NR',
'NS|NS',
'NSR|NSR',
'NSS|NSS',
'NSX|NSX',
'NT|NT',
'NTV|NTV',
'NX|NX',
'Odyssey| Odyssey',
'Pantheon| Pantheon',
'Partner| Partner',
'Passport| Passport',
'PC|PC',
'Pilot| Pilot',
'Preclude| Preclude',
'PS|PS',
'PX50|PX50',
'Quintet| Quintet',
'RC|RC',
'Rebel| Rebel',
'Reflex| Reflex',
'Ridgeline| Ridgeline',,
'Ruckus| Ruckus',
'Rune| Rune',
'Ruf| Ruf',
'Rut| Rut',
'S-600|s-600',
'S-MX|S-M',
'Swing|Swing',
'S200|S200',
'S500|S500',
'S800|S800',
'SCV|SCV',
'SH|SH',
'Shadow|Shadow',
'Shuttle|Shuttle',
'Silverwing|Silverwing',
'Sky|Sky',
'SLR|SLR',
'Smart|Smart',
'Spike|Spike',
'SSM|SSM',
'ST|ST',
'Steed|Steed',
'Stepwagon|Stepwagon',
'Storm|storm',
'Stream|stream',
'Strut-400|strut-400',
'Tiger|Tiger',
'Tl|TI',
'Today| Today',
'Torneo| Torneo',
'TRX| TRX',
'Typer| Typer',
'Unicorn| Unicorn',
'V65| V65',
'Valkyrie| Valkyrie',
'Varnes| Varnes',
'Varadero| Varadero',
'Vezel| Vezel',
'VEZEL/HR-V| VEZEL/HR-V',
'VFR| VFR',
'Vigor| Vigor',
'VT| VT',
'VTX| VTX',
'X-Eleven| X-Eleven ',
'X4|X4',
'X8R-5| X8R-5',
'XBR| XBR',
'XL|XL',
'XR|XR',
'Z4|Z4',
'Z50R|Z50R',
'Zoomer|Zoomer'
]
}
if(s1.value==='Isuzu')
{ [
  '117|117',
  'Amigo|Amigo ',
 'Ascender|Ascender ',
 'Axiom|Axiom ',
 'Bellet|Bellet' ,
 'Bighorn|Bighorn ',
 'Como|Como ',
 'Cxz|CXZ',
 'D-Max|D-MAX' ,
 'Direct|Direct ',
 'Elf-Truck|ELF Truck',
 'Elf-Van|ELF Van ',
 'Ffr|FFR',
 'Florian|Florian ',
 'Forward|Forward',
 'Frontera|Frontera',
 'Frr|FRR',
 'Fsr|FSR ',
 'Ftr|FTR ',
 'Fts|FTS' ,
 'Fvr|FVR ',
 'Fvx|FVX',
 'Fvz|FVZ ',
 'Gemini|Gemini',
 'Giga|GIGA ',
 'Hombre|Hombre',
 'I-Series|I-Series',
 'Impulse|Impulse',
 'Journey|Journey ',
 'Juston|Juston',
 'Kai|Kai',
 'Kb|KB ',
 'Lb|LB ',
 'Minx|Minx ',
 'Mt112|MT112 ',
 'New|New',
 'Nhr|NHR ',
 'Nkr|NKR ',
 'Npr|NPR ',
 'Nqr|NQR ',
 'Oasis|Oasis',
 'Piazza|Piazza',
 'Rodeo|Rodeo',
 'Stylus|Stylus ',
 'Succeed|Succeed ',
 'Tfr54|TFR54 ',
 'Tipper|Tipper',
 'Tougher|Tougher' ,
 'Trooper|Trooper ',
 'Vehicross|Vehicross',
 'Wizard|Wizard',
 'Zxs|ZXS',
]
}
if(s1.value==='Jeep')
{
var optionarr=[
'Cherokee|Cherokee ',
'Commander|Commander',
 'Compass|Compass',
 'Dakar|Dakar',
 'Glenbooks|Glenbooks',
 'Grand-Cherokee|Grand Cherokee',
 'Icon|Icon',
 'Jeepster|Jeepster',
 'Liberty|Liberty',
 'Patriot|Patriot',
 'Renegade|Renegade',
 'Varsity|Varsity ',
 'Willys|Willys',
 'Wrangler|Wrangler'
 ]
}
if(s1.value==='Kia')
{
var optionarr=[
'Amanti|Amanti',
'Avella|Avella',
'Bongo|Bongo',
'Borrego|Borrego',
'Brisa|Brisa',
'Cadenza|Cadenza',
'Capital|Capital',
'Carens|Carens',
'Carnival|Carnival',
'Ceed|Ceed', 
'Cerato|Cerato',
'Clarus|Clarus',
'Cosmos|Cosmos',
'Delta|Delta', 
'Elan|Elan', 
'Forte|Forte', 
'Frontier|Frontier',
'Granbird|Granbird', 
'Granto|Granto', 
'Joice|Joice', 
'K2700|K2700', 
'K5|K5',
'Koup|Koup', 
'Magentis|Magentis',
'Mohave|Mohave',
'Morning|Morning',
'Opirus|Opirus', 
'Optima|Optima',
'Picanto|Picanto',
'Potentia|Potentia',
'Pregio|Pregio',
'Pride|Pride', 
'Pro-Ceed|Pro-Ceed',
'Quoris|Quoris',
'Retona|Retona', 
'Rhino|Rhino', 
'Rio|Rio',
'Rondo|Rondo', 
'Sedona|Sedona',
 'Seltos|Seltos', 
 'Sephia|Sephia',
 'Shuma|Shuma', 
 'Sorento|Sorento',
 'Soul|Soul',
 'Spectra|Spectra',
 'Sportage|Sportage', 
 'Towner|Towner', 
 'Trade|Trade', 
'Visto|Visto', 
'X-Trek|X-Trek', 
'Xedos|Xedos'
]
}
if(s1.value==='Mahindra')
{
  var optionarr=['5000|5000',
  '585|585',
 '6000|600',
 '6030|6030', 
 '605|605', 
 '7030|7030', 
 '705|705',
 '8000|8000',
 '9200|9200',
 '9400|9400',
 'Armada|Armada', 
 'Bolero|Bolero',
 'Cl|CL',
 'Commander|Commander', 
 'Pik-Up|Pik-Up',
 'Scorpio|Scorpio', 
 'Xuv-500|XUV 500'
 ]
}
if(s1.value==='Mazda')
{
var optionarr=[
'1000|1000',
'110|110',
'121|121',
'2|2',
'3|3',
'323|323',
'5|5',
'6|6',
'616|616',
'626|626',
'787|787',
'818|818',
'929|929',
'Atenza|Atenza',
'Axela|Axela',
'Az|Az',
'B-Series|B-Series',
'Biante|Biante',
'Bongo|Bongo',
'Bt-50|Bt-50',
'Cappella|Cappella',
'Carol|Carol',
'Chante|chante',
'Cosmo|Cosmo',
'Cx-3|Cx-3',
'Cx-30|Cx-30',
'Cx-5|Cx-5',
'Cx-7|Cx-7',
'Cx-9|Cx-9',
'Demio|Demio',
'Drifter|Drifter',
'E2200|E2200',
'Etude |Etude',
'Eunos |Eunos',
'Familia | Familia',
'Lantis |Lantis',
'Laputa | Laputa',
'Levante | Levante',
'Leco | Leco',
'Marathon | Marathon',
'Midge | Midge',
'Millenia| Millenia',
'Montrose|Montrose',
'Mpv|Mpv',
'Ms-6|Ms-6',
'Ms-8|Ms-8',
'Ms-9|Ms-9',
'Mx-3|Mx-3',
'Mx-5|Mx-5',
'Mx-6|Mx-6',
'Persona | Persona',
'Premacy|Premacy',
'Proceed|Proceed',
'Protege|Protege',
'R-100|R-100',
'R-360|R-360',
'Rustler|Rustler',
'Rx-2|Rx-2',
'Rx-3|Rx-3',
'Rx-4|Rx-4',
'Rx-7|Rx-7',
'Rx-8|Rx-8',
'Scrum|Scrum',
'Sentia|Sentia',
'Spiano|Spiano',
'Tamashii|Tamashii',
'Titan|Titan',
'Titan Dash |Titan Dash',
'Tribute|Tribute',
'Verisa|Verisa',
'Washo|Washo',
'Xedos | Xedos'
]
}
if(s1.value==='Mercedes')
{
var optionarr=['ccoupe|ccoupe',
'Ml63|Ml63',
'1113|1113',
'1117|1117',
'1217|1217',
'1420|1420',
'1422|1422',
'1733|1733',
'1820|1820',
'1824|1824',
'1827|1827',
'1834|1834',
'190|190',
'190e|190e',
'1922|1922',
'1927|1927',
'200|200',
'200e|200e',
'2024|2024',
'208d|208d',
'208da|280da',
'215|215',
'219|219',
'220|220',
'220e|220e',
'230e|230e',
'2422|2422',
'2524|2524',
'2527|2527',
'260e|260e',
'280e|280e',
'300d|300d',
'300e|300e',
'300se|300se',
'300te|300te',
'313|313',
'500se|500se',
'513|513',
'609d|609d',
'814|814',
'816|816',
'817|817',
'911|911',
'914ak|914ak',
'A-Class|A-Class',
'A170|A170',
'A180|A180',
'A200|A200',
'Actros|Actros',
'Amgc43|Amgc43',
'Ateco|Ateco',
'Atego|Atego',
'Axor|Axor',
'B-Class|B-Class',
'B140|B140',
'B180|B180',
'C180|C180',
'C190|C190',
'C200|C200',
'C230|C230',
'C240|C240' ,
'C250|C250' ,
'C270|C270' ,
'C280|C280 ',
'C300|C300 ',
'C320|C320 ',
'C350|C350 ',
'C400|C400', 
'C450|C450', 
'C55|C55', 
'C63|C63',
'Citaro|Citaro',
'Cito|Cito', 
'Cl ||Cl', 
'Cls|Cls',
'Cls400|Cls400',
'Conecto|Conecto',
'E-Class||E-Class',
'E200|E200',
'E220|E220',
'E230|E230',
'E240|E240', 
'250|250', 
'270|270',
'280|280', 
'300|300', 
'330|330', 
'350|350', 
'400|400',
'420|420',
'430|430',
'450|450',
'500|500',
'55|55',
'550|550',
'E63|E63',
'Freightliner|Freightliner',
'G500|G500',
'G55amg|G55amg',
'G63|G63' ,
'G63amg|G63amg',
'Gla|Gla', 
'Glc|Glc', 
'Gle|Gle',
'Gle350|Gle350',
'Gle43|Gle43',
'Gle450|Gle450',
'Glk|Glk', 
'Gls450|Gls450',
'Integro450|Integro450',
'Intouro|Intouro',
'Mclass|Mclass',
'Marco Polo|Marco Polo',
'Maybach|Maybach',
'Mb100|Mb100',
'Metris|Metris',
'Ml250|Ml250',
'Ml280|Ml280',
'Ml320|Ml280',
'Ml500|Ml500',
'Ml550|Ml550',
'Ml350|Ml350',
'Ml400|Ml400',
'Ponton|Ponton',
'Rclass|Rclass',
'Sclass|Sclass',
'S300|S300',
'S350|S350',
'S400|S400',
'S500|S500',
'S550|S550',
'S560|S560',
'Slc|Slc',
'Slk|Slk',
'Slr|Slr',
'Smart|Smart',
'Sprinter|Sprinter', 
'T1|T1',
'T2|T2',
'Tn|Tn',
'Tourismo|Tourismo',
'Travego|Travego',
'Unimog|Unimog' ,
'V230e|V230e',
'V250|V250',
'Vaneo|Vaneo',
'Viano|Viano',
'Vito|Vito',
'W202|W202',
'W2d3|W2d3',
'X-Class|X-Class'
]
}
if(s1.value==='Mitsubishi')
{
var optionarr=['3000|3000',
'Asx|Asx',
'Airtrek|Airtrek',
'Attrage|Attrage',
'Cander|Cander',
'Caruma|Caruma',
'Celeste|Celeste',
'Challenger|Challenger',
'Chariot|Chariot',
'Colt|Colt',
'Debonair|Debonair',
'Delica|Delica',
'Deula|Deula',
'Diamante|Diamante',
'Dingo|Dingo',
'Dion|Dion',
'Dynatruck|Dynatruck',
'Eclipse|Eclipse',
'Eclipsecross|Eclipsecross',
'Ek|Ek',
'Fighter|Fighter',
'Fto|Fto',
'Fuso|Fuso',
'Fusofighte|Rfusofighter',
'Galant|Galant',
'Grandis|Grandis',
'Gto|Gto',
'Iq|Iq',
'Jeep|Jeep',
'L200|L200',
'L300|L300',
'L400|L400',
'Lancer|Lancer',
'Lancer/Cedia| Lancer/Cedia',
'Lancer Evo|Lancer Evo',
'Lancer Evo4| Lancer Evo4',
'Legnam|Legnam',
'Magna|Magna',
'Minica|Minica',
'Minicab|Minicab',
'Minicab_Truck|Minicab_Truck',
'Monterosport|Monterosport',
'Outlander|Outlander',
'Pajero|Pajero',
'Pajero Io| Pajero Io',
'Pajero Minica|Pajero Minica',
'Pajero Sport|Pajero Sport',
'Raider|Raider',
'Rosa|Rosa',
'Rpm|Rpm',
'Rvr|Rvr',
'Sapporo|Sapporo',
'Shaktimtd 180d',
'Shogun|Shogun',
'Sigma|Sigma',
'Spacerunner|Spacerunner',
'Spacestar|Spacestar',
'Spaceedition|Spaceedition',
'Spyder|Spyder',
'Stepwagon|Stepwagon',
'Strada|Strada',
'Supergreat|Supergreat',
'Triton|Triton',
'Warrior|Warrior',
'Zinger|Zinger',
]
}
if(s1.value==='Nissan')
{
var optionarr=['Skyline crossover| Skyline crossover',
'100|100',
'1400|1400',
'200sx|200sx',
'240sx|240sx',
'260z|260z',,
'300zx|300zx',
'350zx|350zx',
'370z|370z',
'Advan| Advan',
'Almera| Almera',
'Alto| Alto',
'Armada| Armada',
'Atlas| Atlas',
'Avenir| Avenir',
'Basara| Basara',
'Bluebird| Bluebird',
'Cabastar| Cabastar',
'Caravan| Caravan',
'Carina| Carina',
'Cb46| Cb46',
'Cedric| Cedric',
'Cefiro| Cefiro',
'Cherry| Cherry',
'Cima| Cima',
'Civilian| Civilian',
'Clipper| Clipper',
'Commercial |Commercial,',
'Condor| Condor',
'Crew| Crew',
'Cube| Cube',
'Datsun| Datsun',
'Doublecab| Doublecab',
'Dualis| Dualis',
'Ezo| Ezo',
'Elgradd| Elgradd',
'Expert| Expert',
'Fairlady| Fairlady',
'Fb14| Fb14',
'Fb15| Fb15',
'Frontier| Frontier',
'Fuga| Fuga',
'Fusion| Fusion',
'Gloria| Gloria',
'Grand| Grand',
'GT-R|GT-R',
'Hard| body',
'Homy|Homy ',
'Hypermin| Hypermin',
'Ideo| Ideo',
'Interstar| Interstar',
'Juke| Juke',
'Kicks| Kicks',
'Kix| Kix',
'Kubistar| Kubistar',
'Lafesta| Lafesta',
'Latio| Latio',
'Laurel| Laurel',
'Leaf| Leaf',
'Leopard| Leopard',
'Liberty| Liberty',
'Livina| Livina',
'March| March',
'Maxima| Maxima',
'Murano| Murano',
'Navara| Navara',
'Note| Note',
'Np200| Np200',
'Np300| Np300',
'Nv2500| Nv2500',
'Nv200| Nv200',
'Nv3500| Nv3500',
'Otti| Otti',
'Pathfinder |Pathfinder',
'Patrol| Patrol',
'Pick-up| Pick-up',
'Pino| Pino',
'Pintara| Pintara',
'Platina| Platina',
'Prairare| Prairare',
'Premacy| Premacy',
'Presage| Presage',
'Presea| Presea',
'President| President',
'Primastar| Primastar',
'Premera| Premera',
'Pulsar| Pulsar',
'Gashgai| Gashgai',
'Quest| Quest',
'Rasheen| Rasheen',
'Roque| Roque',
'Sahara| Sahara',
'Santana| Santana',
'Sentra| Sentra',
'Shark| Shark',
'Silvia| Silvia',
'Skyline| Skyline',
'Stagea| Stagea',
'Stanza| Stanza',
'Sunny| Sunny',
'Sylphy| Sylphy',
'Teanna| Teanna',
'Terrano | Terrano',
'Tiida| Tiida',
'Trailrunner| Trailrunner',
'UA-QG| UA-QG',
'UD|UD',
'Vivan| Vivan',
'Vannette| Vannette',
'Versa| Versa',
'Violet| Violet',
'Wingroad| Wingroad',
'Xtrail|Xtrail',,
'Xterra|Xterra',
'Z20| Z20'
]
}
if(s1.value==='Peouget')
{
var optionarr=[
'1007|1007',
 '103|103',
 '104|104',
 '106|106',
 '107|107',
 '108|108',
 '2008|2008',
 '202|202',
 '203|203',
 '204|204',
 '205|205',
 '206|206',
 '207|207',
 '208|208',
 '3008|3008 ',
 '3008-Crossover|3008 Crossover',
 '301|301',
 '304|304',
 '305|305',
 '306|306',
 '307|307',
 '308|308',
 '309|309',
 '4008-Suv|4008 SUV',
 '403|403',
 '404|404',
 '405|405',
 '406|406',
 '407|407',
 '408|408',
 '504|504',
 '505|505',
 '508|508',
 '604|604',
 '605|605',
 '607|607',
 '806|806',
 '807|807',
 '907|907 ',
 'Blaster|Blaster',
 'Boxer|Boxer ',
 'C-Tech|C-Tech',
 'Elystar|Elystar',
 'Escapade|Escapade',
 'Expert|Expert ',
 'Geopolis|Geopolis ',
 'Ion|Ion',
 'J5|J5 ',
 'Jet|Jet' ,
 'Jetforce|Jetforce ',
 'Kart|Kart' ,
 'Looxor|Looxor' ,
 'Ludix|Ludix ',
 'Partner|Partner',
 'Rally|Rally',
 'Rc|RC',
 'Rcz|RCZ' ,
 'Satelis|Satelis',
 'Sesame|Sesame',
 'Speedfight|Speedfight ',
 'Sum|Sum',
 'Tkr|TKR ',
 'V-Clic|V-CLIC',
 'Vivacity|Vivacity',
 'Vivacy|Vivacy ',
 'Vogue|Vogue ',
 'Xp|XP', 
 'Xr|XR'
]
}
if(s1.value==='Subaru')
{
var optionarr=['1.8|1.8',
'1400|1400',
'1800|1800',
'1600|1600',
'360|360',
'Alfa| Alfa',
'Baja| Baja',
'BRZ| BRZ',
'Dex| Dex',
'DL| DL',
'Exiga| Exiga',
'FF1| FF1',
'Forester| Forester',
'Impresa| Impresa',
'Justy| Justy',
'Legacy| Legacy',
'Leone| Leone',
'Levorg| Levorg',
'Liberty| Liberty',
'Min| Min',
'Outback| Outback',
'Pleo|',
'RZ| RZ',
'Rex| Rex',
'Sambar| Sambar',
'Stella| Stella',
'STX| STX',
'SUX| SUX',
'Traviq| Traviq',
'Trezia| Trezia',
'Tribeca| Tribeca',
'Vivio| Vivio',
'WRXSTI| WRXSTI',
'XV| XV']
}
if(s1.value==='Subaru')
{
var optionarr=[
'A100|A100' ,
 '250|250 ',
 'Address|Address',
 'Aerio|Aerio', 
 'Alto|Alto', 
 'An|AN',
 'An-125|AN 125',
 'Ap|AP',
 'Apv|APV', 
 'Ax4|Ax4',
 'B-King|B-King ',
 'Baleno|Baleno',
 'Bandit|Bandit ',
 'Boost|Boost',
 'Boulevard|Boulevard',
 'Burgman|Burgman', 
 'Cappuccino|Cappuccino',
 'Carry|Carry' ,
 'Carry-Truck|Carry Truck',
 'Celerio|Celerio', 
 'Cervo|Cervo',
 'Ciaz|Ciaz', 
 'Covie|Covie',
 'Csr|CSR',
 'Djebel|Djebel',
 'Dl|DL ',
 'Dr|DR',
 'Ds|DS',
 'Dzire|Dzire',
 'En-125|EN 125', 
 'Equator |Equator', 
 'Ertiga |Ertiga ',
 'Escudo|Escudo ',
 'Esteem |Esteem',
 'Ev |EV ',
 'Every |Every ',
 'F1|F1',
 'Forenza|Forenza',
 'Fronte|Fronte',
 'Fx650|FX650',
 'Fxr|FXR' ,
 'Gn|GN',
 'Gn-125|GN 125', 
 'Gp|GP ',
' Gr|GR',
 'Grand|Grand ',
 'Grand-Vitara|Grand Vitara',
 'Grass|Grass',
 'Grasstracker|Grasstracker' ,
 'Gs|GS',
 'Gsr|GSR',
 'Gsx|GSX',
 'Gt|GT ',,
 'Gv|GV',
 'Gx|GX',
 'Gz|GZ ',
 'Hayabusa|Hayabusa',
 'Hustler|Hustler ',
 'Ignis|Ignis ',
 'Impulse|Impulse',
 'Inazuma|Inazuma ',
 'Intruder|Intruder',
 'Jimny|Jimny ',
 'Jr|JR',
 'Katana|Katana',
 'Kei|Kei',
 'Kingquad|Kingquad ',
 'Kizashi|Kizashi',
 'Landy|Landy',
 'Lapin|Lapin',
 'Lc|LC',
 'Lets4|LETS4',
 'Liana|Liana',
 'Light|Light',
 'Lj|LJ ',
 'Ls|LS',
 'Marauder|Marauder ',
 'Maruti|Maruti',,
 'Maruti-Gypsy|Maruti Gypsy',
 'Maruti-Omni|Maruti Omni',
 'Ozark|Ozark',
 'Pv|PV ',
 'Quadracer|Quadracer',
 'Quadsport |Quadsport ',
 'Re|RE ',
 'Reno|Reno ',
 'Rf|RF ',
 'Rg|RG',
 'Rm|RM ',
 'Rv|RV',
 'Samurai|Samurai ',
 'Savage|Savage' ,
 'Sb|SB ',
 'Sc|SC',
 'Sea|Sea' ,
 'Serie-X|Serie X ',
 'Sfv650|SFV650 ',
 'Shogun|Shogun ',,
 'Sidekick|Sidekick ',
 'Sierra |Sierra ',
 'Sixteen|Sixteen',
 'Sj |SJ',
 'Skywave |Skywave ',
 'Solio |Solio',
 'Sp |SP ',
 'Splash|Splash',
 'Sr|SR ',
 'St|ST ',
 'Stratosphere|Stratosphere',
 'Street|Street ',
 'Sv|SV ',
 'Sv650sf|SV650SF ',
 'Swift|Swift',
 'Sx|SX ',
 'T|T ',
 'Tc|TC' ,
 'Tl|TL ',
 'Tornado|Tornado ',
 'Tr|TR ',
 'Ts|TS ',
 'Tu|TU',
 'Us|US',
 'V-Strom|V-Strom ',
 'Van|Van',
 'Verona|Verona ',
 'Vi25g|VI25G ',
 'Vitara|Vitara ',
 'Vl|VL',
 'Voltyvolty ',
 'Volusia|Volusia',
 'Vs|VS ',
 'Vx|VX ',
 'Vz|VZ ',
 'Wagon|Wagon ',
 'X-90|X-90',
 'X2|X2 ',
 'Xf|XF ',
 'Xl-6|XL-6 ',
 'Xl-7|XL-7'
]
}
if(s1.value==='Volkswagen')
{
var optionarr=['1|1', 
'1302|1302', 
 '13031303',
 '1518|15.18',
 '1500|1500',
 '1600|1600',
 '1722|17.22',
 '181|181',
 '411|411',
 'Aac|AAC',
 'Amarok|Amarok',
 'Atlas|Atlas',
 'Beetle|Beetle',
 'Bora|Bora',
 'Cabriolet|Cabriolet',
 'Caddy|Caddy',
 'Caravelle|Caravelle ',
 'Cc|CC',
 'Citi|Citi',
 'Commercial|Commercial',
 'Concept|Concept',
 'Corrado|Corrado',
 'Crafter|Crafter',
 'Cross-Polo|Cross Polo',
 'Crossgolf|Crossgolf',
 'Derby|Derby',
 'Eos|Eos',
 'Eurovan|Eurovan',
 'Fox|Fox',
 'Fuscafusca',
 'Gli|GLI',
 'Golf|Golf',
 'Hac|Hac',
 'Iltis|Iltis',
 'Jetta|Jetta',
 'K|K',
 'K70|K70',
 'Karmann-Ghia|Karmann-Ghia',
 'Kombi|Kombi',
 'Lt|LT',
 'Lt-40|LT 40',
 'Lt-55|LT 55',
 'Lupo|Lupo',
 'Magellan|Magellan',
 'Microbus|Microbus',,
 'Multivan|Multivan',
 'Parati|Parati',
 'Passat|Passat ',
 'Phaeton|Phaeton',
 'Pickup|Pickup',
 'Pointer|Pointer',
 'Polo|Polo',
 'Polo-Hatchback|Polo Hathback',
 'Polo-Sedan|Polo Sedan ',
 'Polo-Vivo|Polo Vivo',
 'Quantum|Quantum',
 'Rabbit|Rabbit',
 'Routan|Routan ',
 'Santana|Santana',
 'Schwimmwagen|Schwimmwagen',
 'Scirocco|Scirocco',
 'Seat-Toledo|Seat Toledo',
 'Sharan|Sharan',
 'Sp2|SP2',
 'Tiguan|Tiguan ',
 'Touareg|Touareg',
 'Touran|Touran',
 'Transporter|Transporter',
 'Up|Up',
 'Vento|Vento/Select'
]
}
if(s1.value==='Volvo')
{
var optionarr=['120|120',
'122|122',
'140|140', 
'144|144',
'145|145',
 '164|164',
 '1800|1800',
 '220|220',
 '240|240',
 '242|242',
 '244|244', 
 '245|245', 
 '260|260', 
 '264|264',
 '265|265',
 '312|312', 
'343|343', 
 '360|360', 
 '420|420',
 '440|440', 
 '460|460', 
 '480|480',
 '66|66',
 '740|740', 
 '760|760',
 '780|780',
 '850|850', 
 '940|940',
 '960|960',
 'c30|C30', 
 'c70|C70', 
 'fh12|FH12',
 'fl-10|FL-10',
 'fl-12|FL-12',
 'fl-220|FL-220',
 'fl-6|FL-6',
 'fl-7|FL-7',
 'fm-12|FM-12',
 'p1800|P1800',
 'p210|P210',
 'pv|PV',
 's|S',
 's40|S40',
 's60|S60',
 's70|S70',
 's80|S80',
 's90|S90',
 'scc|SCC',
 'v10|V10',
 'v40|V40',
 'v50|V50', 
 'v60|V60',
 'v70|V70',
 'v90|V90',
 'vn|VN',
 'wg|WG',
 'xc60|XC60', 
 'xc70|XC70',
 'xc90|XC90',
 'ycc|YCC'
]
}
if(s1.value==='Alfa Romeo')
{
var optionarr=[
'145|145',
'146|146',
 '147|147',
 '155|155',
 '156|156',
 '159|159' ,
 '1600|1600',
 '164|164' ,
 '166|166',
 '175|175' ,
 '1750|1750',
 '179|179', ,
 '1900|1900',
 '2000|2000',
 '2600|2600',
 '33|33',
 '4c-Spider|4C Spider',
 '6|6' ,
 '66|66',
 '75|75',
 '8c|8C',
 '90|90',
 'Alfasud|Alfasud',
 'Alfetta|Alfetta',
 'Ar|AR ',
 'Arna|Arna',
 'Bella|Bella ',
 'Berlina|Berlina',
 'Brera|Brera',
 'Caimano|Caimano',
 'Carabo|Carabo',
 'Centauri|Centauri',
 'Crosswagon|Crosswagon',
 'Cuneo|Cuneo',
 'Dardo|Dardo',
 'Disco|Disco',
 'Eagle|Eagle',
 'Giulia|Giulia',
 'Giulia-Qv|Giulia QV ',
 'Giulia-Super|Giulia Super',
 'Giulia-Super-Stile|Giulia Super Stile',
 'Giulietta|Giulietta',
 'Graduate|Graduate',
 'Gt|GT',
 'Gta|GTA',
 'Gtv|GTV',
 'Junior|Junior',
 'Kamal|Kamal',
 'Mito|Mito',
 'Navajo|Navajo',
 'Nuvola|Nuvola',
 'Proteo|Proteo',
 'Rz|RZ',
 'Scarabeo|Scarabeo',
 'Scighera|Scighera',
 'Spider|Spider',
 'Sportiva|Sportiva',
 'Sportwagon|Sportwagon',
 'Sprint|Sprint',
 'Sz|SZ'
]
}
for(var option in optionarr){
var pair=optionarr[option].split('|')
var newoption=document.createElement('option')
newoption.value=pair[0]
newoption.innerHTML=pair[1]
s2.options.add(newoption)
}
var s1=document.getElementById('s1').value
}

</script>