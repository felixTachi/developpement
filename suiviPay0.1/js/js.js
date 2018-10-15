$(document).ready(function(){
    $('#service').change(function () {
		v=$("#service option:selected").val();
		if(v=="1"){
			$('div.petitdejeuner').show("slow").delay(100);
			$('div.dejeuner').hide("slow").delay(100);
			$('div.boisson').hide("slow").delay(100);
			$('div.buffet').hide("slow").delay(100);
			$('div.grillade').hide("slow").delay(100);
			$('div.dessert').hide("slow").delay(100);
		}
		else if(v=="2") {
			$('div.dejeuner').show("slow").delay(100);
			$('div.buffet').show("slow").delay(100);
			$('div.petitdejeuner').hide("slow").delay(100);
			$('div.boisson').hide("slow").delay(100);
			$('div.grillade').hide("slow").delay(100);
			$('div.dessert').hide("slow").delay(100);
		}
		else if(v=="3") {
			$('div.boisson').show("slow").delay(2000);
			$('div.petitdejeuner').hide("slow").delay(100);
			$('div.dejeuner').hide("slow").delay(100);
			$('div.buffet').hide("slow").delay(100);
			$('div.grillade').hide("slow").delay(100);
			$('div.dessert').hide("slow").delay(100);
		}
		else if(v=="4") {
			$('div.dessert').show("slow").delay(100);
			$('div.petitdejeuner').hide("slow").delay(100);
			$('div.dejeuner').hide("slow").delay(100);
			$('div.buffet').hide("slow").delay(100);
			$('div.grillade').hide("slow").delay(100);
			$('div.boisson').hide("slow").delay(100);
		}
		else if(v=="6") {
			$('div.grillade').show("slow").delay(100);
			$('div.petitdejeuner').hide("slow").delay(100);
			$('div.dejeuner').hide("slow").delay(100);
			$('div.buffet').hide("slow").delay(100);
			$('div.dessert').hide("slow").delay(100);
		}
		
		else if(v=="--Choisir--") {
			$('div.boisson').hide("slow").delay(100);
			$('div.petitdejeuner').hide("slow").delay(100);
			$('div.dejeuner').hide("slow").delay(100);
			$('div.buffet').hide("slow").delay(100);
			$('div.grillade').hide("slow").delay(100);
			$('div.dessert').hide("slow").delay(100);
		}
    })
    .trigger('change');
 
})