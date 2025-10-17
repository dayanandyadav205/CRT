//footer js
class MyFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `<footer>
                <div class="footer">
                    <p>&copy; Designed & Developed by Dayanand Yadav, Assistant Professor, CSE Department, CDGI, Indore</p>
                </div>
         </footer>`;

    }
}
customElements.define('my-footer', MyFooter);