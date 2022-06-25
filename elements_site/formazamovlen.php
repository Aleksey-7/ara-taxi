
<!--НTML СТРУКТУРА ФОРМЫ ОТПРАВКИ ЗАКАЗОВ НА САЙТЕ  -->


 <form  action="http://ara-taxi.local/elements_site/addOrder.php" method="POST">
   	  <div class="modal" id="zakazavto">
        
   		 <div class="zamovutu">
   			    <button type="submit"><img src="images/zamov.png"></button>
   		 </div>

 	     <div class="zvidkila" id="from">
 			  <p>Куди подати авто</p>
 		       <input type="text" name="kudaPodavat" placeholder="куда подать авто">
 		      
 		       <img src="images/kyda.png">
 	     </div>

 	     <div class="kydu" id="to">
 			  <p>Куди будемо їхати</p>
 		       <input type="text" name="kudaEdem" placeholder="куда ехать ">
 		       <img src="images/source.gif">
 	     </div>

 	     <div class="telephon" id="tel">
 			  <p>Вкажіть свій номер</p>
 		       <input type="text" name="phone" placeholder="Ваш телефон">
 		       <img src="images/teltaxi.png">
 	     </div>
     </div>		
   </form>
   