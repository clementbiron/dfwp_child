var DFWP_Bootstrap = new (function() 
{
	// Accès à l'objet
	var that = this;

	//Init
	this.init = function() 
	{
		//Bootstrap init
		if(window['Common'] != undefined){
			Bootstrap.init();
		}
		
		//Appel d'objet dynamic
		that.dynamicClassCall();
	},
	
	this.dynamicClassCall = function ()
	{
		//On récupéere le noeud dom <body>
		var bodyDom = document.getElementsByTagName('body')[0];

		//On récupère les class sur le body
		var htmlClass = bodyDom.className;
		
		//On camelize
		htmlClass = DFWP_Helper.camelize(htmlClass);
		
		//On coupe au niveau des ' '
		htmlClass = htmlClass.split(' ');
		
		//Pour chaque valeur
		htmlClass.forEach(function(entry) {
			
			//On capitalize la première lettre
			value = DFWP_Helper.capitaliseFirstLetter(entry);
			
			//On instancie un objet avec la string
			var currentObject = window[value];
			
			//Si cet objet existe
			if(currentObject != undefined){

				//Alors on l'initialie
				currentObject.init();
			}
		});
	};
});
/**
 * Static helper functions 
 */
var DFWP_Helper = function(){};

/**
 * camelize str
 * @param {Object} str
 */
DFWP_Helper.camelize = function(str)
{
	return (str + "").replace(/-\D/g, function(match) {
		return match.charAt(1).toUpperCase();
	});
};

/**
 * capitalize first letter of string
 * @param {Object} str
 */
DFWP_Helper.capitaliseFirstLetter = function(str)
{
	return str.charAt(0).toUpperCase() + str.slice(1);
};

var Bootstrap = new (function() 
{
	// Accès à l'objet
	var that = this;

	//Init
	this.init = function() 
	{
		console.log('Bootstrap init() ');

		//Initialiser les élements d'interface communs
		CommonGUI.init();
	};
});
var CommonGUI = new (function() 
{
	// Accès à l'objet
	var that = this;

	//Init
	this.init = function() 
	{
		console.log('CommonGUI init() ');
	};
});
/**
 * Exemple Js component
 */
var Exemple = new(function() 
{
	// Accès à l'objet
	var that = this;

	//Init
	this.init = function() 
	{
		console.log('Exemple init() ');
	};
});