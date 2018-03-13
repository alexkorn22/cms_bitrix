CalculatorPayback = function (urlAjax) {
    this.cmServings = $('#cmServings');
    this.priceCofee = $('#priceCofee');
    this.priceSale = $('#priceSale');
    this.urlAjax = urlAjax;
    var self = this;

    this.constructor = function () {
        self.priceSale.on('change',self.changeValue);
        self.priceCofee.on('change',self.changeValue);
        self.cmServings.on('change',self.changeValue);
    };
    this.changeValue  = function (e) {
        $.ajax({
            url : self.urlAjax,
            type: 'POST',
            data: {
                priceSale : self.priceSale.val(),
                priceCofee : self.priceCofee.val(),
                cmServings : self.cmServings.val()
            },
            success : function (html) {
                $("#result").html(html)
            }
        });
    };
    this.constructor();
};