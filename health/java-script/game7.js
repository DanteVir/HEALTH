const puzzleContainer = document.getElementById('puzzle');
const restartButton = document.getElementById('restartButton');
const size = 3; // Tamaño del rompecabezas (3x3)
let board = Array.from({ length: size * size }, (_, i) => i);
let emptyTileIndex = size * size - 1; // La última casilla está vacía
let tiles = [];

// Función para mezclar el tablero
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

// Inicializa el tablero
function initializeBoard() {
    shuffle(board);
    emptyTileIndex = board.indexOf(size * size - 1);
    renderBoard();
}

// Renderiza el tablero
function renderBoard() {
    puzzleContainer.innerHTML = '';
    board.forEach((value, index) => {
        const tile = document.createElement('div');
        tile.className = 'puzzle-piece';
        if (value !== size * size - 1) {
            tile.style.backgroundPosition = `-${(value % size) * 100}px -${Math.floor(value / size) * 100}px`;
            tile.dataset.index = index;
            tile.addEventListener('click', () => moveTile(index));
        } else {
            tile.classList.add('empty');
        }
        puzzleContainer.appendChild(tile);
    });
}

// Mueve una pieza al espacio vacío
function moveTile(index) {
    const emptyIndex = emptyTileIndex;
    const allowedMoves = [index - size, index + size, index - 1, index + 1];
    
    if (allowedMoves.includes(emptyIndex) && Math.abs(index - emptyIndex) !== size + 1) {
        // Intercambia la pieza con el espacio vacío
        [board[index], board[emptyIndex]] = [board[emptyIndex], board[index]];
        emptyTileIndex = index;
        renderBoard();
        checkWin();
    }
}

// Verifica si el juego ha sido ganado
function checkWin() {
    if (board.every((value, index) => value === index)) {
        setTimeout(() => alert('¡Ganaste!'), 100);
    }
}

// Reinicia el juego
function restartGame() {
    initializeBoard();
}

// Configura el juego inicial
restartButton.addEventListener('click', restartGame);
initializeBoard();
