import LocalStorage from "./localstorage.js";
import Dialog from "./dialog.js";
const localstorage = new LocalStorage();

export default class Todo{
    constructor(){
        this.enterButton = document.querySelector('#inputArea button');
        this.input = document.querySelector('#inputArea input');
        this.ul = document.querySelector('ul#toDoList');
        if(localstorage.items.length > 0) {
            this.loadFromLocalStorage();
        }
        this.enterButton.addEventListener('click', (e)=> this.addListItem(e));
        this.input.addEventListener('keypress', (e)=> this.addListItem(e));
    }
    addListItem(e){
        if(this.input.value.length > 0 && (e.key === 'Enter' || e.key === undefined)){
            this.createListItem();
        }
    }
    createListItem(){
        const li = document.createElement('li');
        li.innerHTML = `${this.input.value} <i class="fas fa-trash-alt"></i>`;
        this.ul.appendChild(li);
        this.input.value = '';
        li.addEventListener('click',(e) => this.crossOut(e));
        li.querySelector('i').addEventListener('click',(e) => this.deleteListItem(e));
        localstorage.updateItems(this.ul);
    }
    crossOut(e){
        e.currentTarget.classList.toggle('done');
        localstorage.updateItems(this.ul);
    }
    async deleteListItem(e){
        e.stopPropagation();
        const listItem = e.currentTarget.parentNode;
        const dialog = new Dialog({
            questionText:'Er du virkelig sikker?',
            trueButtonText:'Jaa',
            falseButtonText:'Neej'
        });
        const deleteItem = await dialog.confrim();
        if(deleteItem === true){
            listItem.remove();
            localstorage.updateItems(this.ul);
        }
    }
    loadFromLocalStorage(){
        let listItems = '';
        localstorage.items.forEach(item => listItems += item);
        this.ul.innerHTML = listItems;
        this.ul.querySelectorAll('li').forEach(li => {
            li.addEventListener('click',(e) => this.crossOut(e));
            li.querySelector('i').addEventListener('click',(e) => this.deleteListItem(e));
        })
    }
}