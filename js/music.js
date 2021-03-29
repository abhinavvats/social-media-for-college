console.log('Musica');

const ap = new APlayer({
    container: document.getElementById('aplayer'),
    listFolded:true,
    audio: [{
        name: 'Wiz Khalifa ~ See You Again ft. Charlie Puth',
        artist: 'Wiz Khalifa ~ See You Again ft. Charlie Puth',
        url: '../music/Wiz Khalifa ~ See You Again ft. Charlie Puth.mp3',
        cover: '../musicImg/1.jpg'
    }]
}); 