//To Do List Application
 let items = JSON.parse(localStorage.getItem("items")) || [];

    function saveItems(){
      localStorage.setItem("items", JSON.stringify(items));
    }

    function addItem() {
      let input = document.getElementById("inputItem").value;
      document.getElementById("inputItem").value = "";

      if (input === "") {
        alert("Please enter an item");
      } else {
        items.push(input);
      }
      // console.log(input);
      saveItems()
      renderItems();
    }

    function deleteItem(index) {
      items.splice(index, 1);
      saveItems()
      renderItems();
    }

    function editItem(index){
      let newValue = prompt("Edit Item:", items[index]);
      if(newValue !== '' && newValue !== null){
      items[index] = newValue;
      }
      saveItems()
      renderItems();
    }

    function renderItems() {
      let itemList = document.getElementById("toDoList");
      document.getElementById("toDoList").innerHTML = "";

      items.forEach((items, index) => {
        let li = document.createElement('li');
        li.textContent = items;
        itemList.appendChild(li);
        console.log(itemList);

        let deleteBtn = document.createElement('button');
        deleteBtn.textContent = 'X';
        li.appendChild(deleteBtn);
        deleteBtn.addEventListener('click', () => deleteItem(index));
        // console.log(items);

        let editBtn = document.createElement('button');
        editBtn.textContent = 'Edit';
        // console.log(editBtn);
        li.appendChild(editBtn);
        editBtn.addEventListener('click', ()=> editItem(index));


      });

    }

    renderItems();



 