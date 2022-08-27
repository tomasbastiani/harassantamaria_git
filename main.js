class IndexForSiblings{
	static get(el){
		let children = el.parentNode.children;

		for (var i = 0; i < children.length; i++) {
			let child = children[i];
			if (child == el) {
				return i;
			}
		}
	}
}


class Slider{
	constructor(selector){
		this.move = this.move.bind(this);
		this.moveByButton = this.moveByButton.bind(this);
		this.slider = document.querySelector(selector);
		this.itemsCount = this.slider.querySelectorAll(".container > *").length;
		this.interval = null;
		this.contador = 0;

		this.start();
		this.buildControls();
		this.bindEvents();
	}
	start(){
		this.interval = window.setInterval(this.move, 4000);
	}

	bindEvents(){
		this.slider.querySelectorAll(".controls li.active")
		.forEach(item =>{
			item.addEventListener("click", this.moveByButton)
		});
	}

	restart(){
		if (this.interval) {window.clearInterval(this.interval);}
		this.start();
	}

		moveByButton(ev){
			let index = IndexForSiblings.get(ev.currentTarget);
			this.contador = index;
			this.moveTo(index);
			this.restart();
		}


	buildControls(){
		for (var i = 0; i < this.itemsCount; i++) {
			let control = document.createElement("li");
		
		if (i == 0) control.classList.add("active");

		this.slider.querySelector(".controls ul").appendChild(control);
		
		}

	}


	move(){
		this.contador++;
		if (this.contador > this.itemsCount -1) 
			this.contador = 0;
			this.moveTo(this.contador -1);
	}

	resetIndicator(){
		this.slider.querySelectorAll(".controls li.active")
		.forEach(item => item.classList.remove("active"));
	} 

	moveTo(index){
		let left = index * 104;
		this.resetIndicator();
		this.slider.querySelector(".controls li:nth-child("+(index+1)+")").classList.add("active");
		this.slider.querySelector(".container").style.left = "-"+left+"%";
	}
}


(function(){

	new Slider(".slider");

})();