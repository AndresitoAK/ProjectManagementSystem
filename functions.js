class App{
    dNumber = 0;
    createTask = document.getElementById('tworz-zadanie');
    constructor() {
        
    }
    dodajZadanie(){
        let x = this.dNumber;
        let tab = [document.getElementById('task-color').value, document.getElementById('task-name').value, document.getElementById('task-description').value, document.getElementById('task-date').value, document.getElementById('task-time').value];
        tab.forEach(element =>{
            if(element == ''){
                alert('Please fill all fields');
                return;
            }
        });

        let taskColor = tab[0];
        let teskName = tab[1];
        let taskDescription = tab[2];
        let taskDate = tab[3];
        let taskTime = tab[4];
        

        let hour = taskTime.split(':')[0];
        let minute = taskTime.split(':')[1];

        if (hour < 0 || minute < 0 || hour > 23 || minute > 59 || taskDate<2023) {
            alert('Invalid time');
            return;
        }
        
        this.createTask.style.visibility = 'hidden';


        let divTaskName = document.createElement('div');
        let divTaskDescription = document.createElement('div');
        let divTaskDateTime = document.createElement('div');
        let divTaskColor = document.createElement('div');

        divTaskName.classList.add('task-name');
        divTaskDescription.classList.add('task-description');
        divTaskDateTime.classList.add('task-date-time');
        divTaskColor.classList.add('task-color');
        
        divTaskName.textContent = teskName;
        divTaskDescription.textContent = taskDescription;
        divTaskDateTime.textContent = taskDate + ' ' + taskTime;
        divTaskColor.style.backgroundColor = taskColor;

        let parent = document.getElementById(`d${x}`);
        let div = document.createElement('div');
        div.classList.add('task');
        
        div.appendChild(divTaskColor);
        div.appendChild(divTaskName);
        div.appendChild(divTaskDateTime);
        div.appendChild(divTaskDescription);
        

        parent.appendChild(div);

    }
    task(prm) {
        try{
            switch (prm) {
                case 1:
                    this.dNumber = 1;
                    this.createTask.style.visibility = 'visible';
                    break;
                case 2:
                    this.dNumber = 2;
                    this.createTask.style.visibility = 'visible';
                    break;
                case 3:
                    this.dNumber = 3;
                    this.createTask.style.visibility = 'visible';
                    break;
                default:
                    throw 'Invalid argument';
                    break;
            }
        }catch(e){
            console.log(e);
        }
        
        
    }

}
let app = new App();
