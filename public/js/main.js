class Adapter
{
    constructor(element, size, period)
    {
        this.left = 1;
        this.right = size;
        this.size = size;
        this.items = $(element).children('.adapter-item');
        this.length = this.items.length;
        
        this.intervalID = setInterval(() => {
            this.offset();
            this.refresh();
        }, period); 
    }

    offset()
    {
        if(this.right === this.length)
        {
            this.left = 1;
            this.right = this.size;
        } else 
        {
            this.left += this.size;
            this.right += this.size;

            if(this.right > this.length)
            {
                this.right =  this.length;
                this.left = this.right - this.size - 1;
            }
        }
    }

    refresh()
    {
        let s = '';
        for(let i=0; i<this.length; i++)
        {
            if(this.isVisible(i))
            {
                $(this.items[i]).removeClass('d-none');
                $(this.items[i]).addClass('d-block');
                s += '1';
            }else
            {
                $(this.items[i]).addClass('d-none');
                $(this.items[i]).removeClass('d-block');
                s += '0';
            }
        }
        //console.log(s);
    }

    isVisible(id) {
        return (id >= this.left && id <= this.right);
    }
}
new Adapter('.offer-adapter', 4, 6000);

function requestMeal(mealID) {
    $.ajax(
    {
        url: 'http://127.0.0.1:8000/orders/update',
        type: 'POST',
        data: { 
            TYPE: 'push',
            CATEGORY: 'meal',
            ID: mealID
        }
    }).done(function(msg) {
        console.log(msg);
    });
}