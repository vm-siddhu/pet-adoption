document.getElementById('adopt-now-btn').addEventListener('click', () => {
        window.location.href = 'html/adopt.php'
});
document.getElementById("adopt-btn").addEventListener("click", ()=>{
    window.location.href = "html/adopt.php"
})

function viewPet(petId) {
    window.location.href = `html/pet.php?id=${petId}`;
}
