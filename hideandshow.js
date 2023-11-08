new Vue({
    el: '#selection',
    data: {
        option1: 'Convert from', 
        option2: 'Convert to', 
    },
    computed: {
        isBasedivVisible() {
            return (this.option1 === 'px' && this.option2 === 'em') || (this.option1 === 'em' && this.option2 === 'px');
        },
        isDpidivVisible() {
            return (this.option1 === 'px' && this.option2 === 'in') || (this.option1 === 'in' && this.option2 === 'px') || (this.option1 === 'cm' && this.option2 === 'px') || (this.option1 === 'px' && this.option2 === 'cm') || (this.option1 === 'px' && this.option2 === 'mm') || (this.option1 === 'mm' && this.option2 === 'px');
        },
    },
});