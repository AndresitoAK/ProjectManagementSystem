class App{
    constructor() {
        
    }
    task(prm) {
        switch (prm) {
            case '1':
                console.log('1');
                break;
            case '2':
                console.log('2');
                break;
            case '3':
                console.log('3');
                break;
            default:
                console.log('default');
                break;
        }
    }

}
let app = new App();
