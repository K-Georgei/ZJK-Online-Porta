let selectedRoom = null;

const modal = document.getElementById("modal");
const modalRoomInfo = document.getElementById("modalRoomInfo");
const confirmButton = document.getElementById("confirmButton");
const cancelButton = document.getElementById("cancelButton");



const showModal = () =>{
    // Modal megjelenítése
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}


const hideModal = () =>{
    // Modal elrejtése
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}



//Adatok lekérdezése {API}
const getAvaiableRooms = async () => {
    const URL = "/api/user";

    const response = await fetch(URL); // waits until the request completes

    // return a promise
    return response.json();
};

const createRoomElement = (room) => {
    const roomElement = document.createElement("div");
    roomElement.classList.add(
        'w-20', 'h-20', 'bg-amber-500', 'rounded-lg', 'flex',
        'items-center', 'justify-center', 'shadow', 'cursor-pointer',
        'hover:bg-amber-600', 'hover:text-white'
    );

    roomElement.textContent = room.room_number;

    roomElement.addEventListener("click", () => {
        selectedRoom = room;
        modalRoomInfo.textContent = `Biztosan lefoglalja a(z) ${selectedRoom.room_number}. szobát?`;

        // Modal megjelenítése
        showModal();
    });

    return roomElement;
};


// Modal események
cancelButton.addEventListener("click", () => {
    modal.classList.add("hidden");
    selectedRoom = null;
});

confirmButton.addEventListener("click", async () => {
    if (!selectedRoom) return;

    const data = { room:  selectedRoom};

    // Modal elrejtése
    hideModal();

    sendDataToBackend(data);

});



// Szobák renderelése
const renderRooms = async () => {
    const roomsDiv = document.getElementById("roomsDiv");
    const availableRooms = await getAvaiableRooms();

    roomsDiv.innerHTML = "";
    availableRooms.forEach((room) => {
        const roomElement = createRoomElement(room);
        roomsDiv.appendChild(roomElement);
    });
};



//Adat visszaküldése {API}
const sendDataToBackend = async (data) => {
    const URL = "/api/save-room"; //API endpoint
    const user_id = document.getElementById("user_id").value;
    data = {...data, ...{user_id: user_id}};

    console.log(data);

    try {
        const response = await fetch(URL, {
            method: "POST", // HTTP POST metódus
            headers: {
                "Content-Type": "application/json", // JSON formátum
                // "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Laravel CSRF token
            },
            body: JSON.stringify(data)
        });

        const result = await response.json(); // Backend válasz
        // console.log(result);

        if (result == 200) {
            new FilamentNotification()
            .title('Siker')
            .body("Sikeres foglalás")
            .success()
            .send()

            const bookingMain = document.getElementById("booking-main");

            bookingMain.style.pointerEvents = "none";
            setTimeout(() => {
                // Események visszaállítása
                bookingMain.style.pointerEvents = "auto";
                Livewire.dispatch('booking-created');
            }, 6000);
            

         
        }
        else{
            new FilamentNotification()
            .title('Hiba')
            .body("Ez a szoba megtelt")
            .icon("heroicon-o-x-circle")
            .iconColor("danger")
            .color("danger")
            .send()
        }


    } catch (error) {
        console.error("Hiba történt a kérés során:", error);

        new FilamentNotification()
        .title('Hiba')
        .body("Valami hiba történt..")
        .icon("heroicon-o-x-circle")
        .iconColor("danger")
        .color("danger")
        .send()
    }
};










// MAIN

renderRooms();