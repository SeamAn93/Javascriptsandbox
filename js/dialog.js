export default class Dialog{

    constructor({questionText, trueButtonText, falseButtonText}) {
        this.questionText = questionText || "Er du sikker?";
        this.trueButtonText = trueButtonText || "Ja";
        this.falseButtonText = falseButtonText || "Nej";

        this.dialog = undefined;
        this.trueButton = undefined;
        this.falseButton = undefined;
        this.createDialog();
    }
    confrim(){
        return new Promise((resolve) => {
            this.dialog.showModal();
            this.trueButton.addEventListener('click', () => {
            resolve(true);
            this.destory();
            });
            this.falseButton.addEventListener('click', () => {
            resolve(false);
            this.destory();
            });
        });
    }
    createDialog(){
        this.dialog = document.createElement('dialog');
        this.dialog.innerHTML = `
            <div class="dialog-question">${this.questionText}</div> 
            <div class="dialog-button-group">
                <button class="dialog-button--false">${this.falseButtonText}</button>
                <button class="dialog-button--true">${this.trueButtonText}</button>
            </div>`;
        this.trueButton = this.dialog.querySelector('.dialog-button--true');
        this.falseButton = this.dialog.querySelector('.dialog-button--false');
        this.dialog.addEventListener('click', (e) => {
            if(e.target === this.dialog){
                this.destory();
            }
        });
        document.body.appendChild(this.dialog);
    }
    destory(){
        document.body.removeChild(this.dialog);
        delete this;
    }
}