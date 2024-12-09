const getAvaiableRooms = async () => {
    const URL = "/api/user";

    const response = await fetch(URL); // waits until the request completes

    // return a promise
    return response.json();
};

const createRooms = (roomNumbers, avaiableRooms) => {
    const roomsDiv = document.getElementById("roomsDiv");
    
    for (let i = 0; i < roomNumbers; i++) {
        const roomElement = document.createElement("div");
        roomElement.classList.add(
            'w-20', 'h-20', 'bg-amber-500', 'rounded-lg', 'shadow-lg',
            'flex', 'items-center', 'justify-center', 'border-2', 'border-amber-400',
            'hover:bg-amber-700', 'group'
        );
        
        const roomSpan = document.createElement("span");
        roomSpan.classList.add(
            'text-4xl', 'font-bold', 'text-gray-700', 'cursor-default', 'group-hover:text-white'
        );
        roomSpan.textContent = avaiableRooms[i].room_number;

        roomElement.appendChild(roomSpan);
        roomsDiv.appendChild(roomElement);
    }
};


const btn = document.getElementById("test");
btn.addEventListener("click", () => {
    console.log("Button clicked!");
});

// Lekérdezés és szobák létrehozása
const avaiableRooms = await getAvaiableRooms();
const roomNumbers = avaiableRooms.length;

createRooms(roomNumbers, avaiableRooms);