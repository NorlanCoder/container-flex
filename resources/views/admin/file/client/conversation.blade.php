@extends('admin.template')

@section('title', 'Messagerie')

@section('messages', 'text-gray-800 text-white bg-[#444] rounded-r-full')

@section('style')
<style>
    /* Style de base */
    /* body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    } */

    /* Widget de chat */
    #chat-widget {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }

    .hidden {
        display: none;
    }

    /* Icône de chat */
    #chat-icon {
        width: 60px;
        height: 60px;
        background-color: #6a27e0;
        color: white;
        font-size: 24px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
        margin-top: 5px;
        position: absolute;
        right: 0;
        bottom: -10px
    }

    #chat-icon:hover {
        transform: scale(1.1);
    }

    /* Boîte de chat */
    #chat-box {
        width: 400px;
        height: 600px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        position: absolute;
        right: 0;
        bottom: 60px;
        overflow: auto;
    }

    @media (max-width: 768px) {
        #chat-box {
            width: 95vw;
        }

        #chat-widget {
            right: 5px;
        }
    }

    /* Masquer par défaut */
    .hidden {
        display: none;
    }

    .d-none {
        display: none !important;
    }

    /* En-tête de chat */
    #chat-header {
        background-color: #6a27e0;
        color: white;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    #chat-header h4 {
        margin: 0;
        font-weight: 100;
    }

    #chat-header button {
        background: none;
        border: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
    }

    /* Contenu de chat */
    /* Scroll automatique si la conversation dépasse */
    #chat-content {
        flex: 1;
        padding: 10px;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
    }

    /* Entrée de chat */
    #chat-input {
        display: flex;
        border-top: 1px solid #ddd;
    }

    #chat-input input {
        flex: 1;
        padding: 15px;
        border: none;
        outline: none;
    }

    #chat-input button {
        background-color: #6a27e0;
        color: white;
        border: none;
        padding: 15px 15px;
        cursor: pointer;
    }

    /* Messages dans le chat */
    .message {
        max-width: 70%;
        margin: 10px 0;
        padding: 10px 15px;
        border-radius: 20px;
        font-size: 14px;
        position: relative;
    }

    /* Messages reçus */
    .message.received {
        background-color: #f1f1f1;
        color: #333;
        margin-left: 10px;
        align-self: flex-start;
        border-top-left-radius: 0;
    }

    /* Messages envoyés */
    .message.sent {
        background-color: #6a27e0;
        color: white;
        margin-right: 10px;
        align-self: flex-end;
        border-top-right-radius: 0;
    }

    /* Horodatage */
    .timestamp {
        font-size: 10px;
        color: #444;
        margin-top: 5px;
        display: block;
        text-align: right;
    }

    .message.sent .timestamp  {
        color: #ddd;
    }

</style>

@endsection

@section('content')
    <div class="container px-6 mx-auto grid">
        <div class="flex flex-row justify-between items-center">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Messagerie
            </h2>
        </div>


        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div id="chat-widget">

                <!-- Bloc de chat -->
                <div id="chat-box" class="">
                    <div id="chat-header">
                        <h4>{{$user->fullname}}</h4>
                        <button onclick="toggleChat()">×</button>
                    </div>
                    <div id="chat-content">
                         <!-- Messages -->

                    </div>
                    <div id="chat-input">
                        <input type="text" required class="bg-black text-white" name="messagetext" id="messagetext" placeholder="Écrivez votre message..." />
                        <button onclick="sendMessage()">
                            <span id="sendText">Envoyer</span>
                            <span id="sendSpinner" class="hidden">⏳</span>
                        </button>
                    </div>
                </div>

                <!-- Icône de chat -->
                <div id="chat-icon" onclick="toggleChat()">💬</div>

            </div>
        </div>

    </div>
@endsection

@section('script')

<script>

    function toggleChat() {
        const chatBox = document.getElementById('chat-box');
        chatBox.classList.toggle('d-none');

        if (!chatBox.classList.contains('d-none')) {
            // Si la boîte de chat est visible, scroller en bas
            const chatContent = document.getElementById('chat-content');
            chatContent.scrollTop = chatContent.scrollHeight;
        }
    }

</script>

<script>

    // Fonction pour ajouter un message
    function addMessage(text, type) {
        const chatContent = document.getElementById('chat-content');

        // Créer un conteneur pour le message
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message', type);

        // Ajouter le texte du message
        const messageText = document.createElement('p');
        messageText.textContent = text;
        messageDiv.appendChild(messageText);

        // Ajouter un horodatage
        const timestamp = document.createElement('span');
        timestamp.classList.add('timestamp');
        timestamp.textContent = new Date().toLocaleTimeString();
        messageDiv.appendChild(timestamp);

        // Ajouter le message à la boîte de chat
        chatContent.appendChild(messageDiv);

        // Scroll automatique vers le bas
        chatContent.scrollTop = chatContent.scrollHeight;
    }

    // Gestion de l'envoi de message
    document.querySelector('#chat-input button').addEventListener('click', () => {
        const input = document.querySelector('#chat-input input');
        const message = input.value.trim();

        if (message) {
            addMessage(message, 'sent'); // Ajouter le message envoyé
            input.value = ''; // Réinitialiser l'input

            // Ajouter une réponse automatique simulée
            // setTimeout(() => {
            // addMessage('Merci pour votre message. Nous reviendrons vers vous rapidement.', 'received');
            // }, 1000);
        }
    });

</script>


<script>

    function decodeHtmlEntities(encodedString) {
        const parser = new DOMParser();
        const doc = parser.parseFromString(encodedString, "text/html");
        return doc.documentElement.textContent;
    }

    document.addEventListener('DOMContentLoaded', function () {
        const userid = {{$user->id}};
        const encodedResponse  = "{{$messages}}";
        const decodedResponse = decodeHtmlEntities(encodedResponse);
        const messages = JSON.parse(decodedResponse);
        // console.log(messages)
        for (let i = 0; i < messages.length; i++) {
            if(messages[i].sender_id!=userid) {
                addMessage(messages[i].message,'sent')
            } else {
                addMessage(messages[i].message,'received')
            }
        }

        const clientid = "{{$user->id}}";

        Echo.channel(`messages.${userid}`)
            .listen('MessageSent', (e) => {
                if(e) {
                    if(e.senderId==clientid) {
                        addMessage(e.text,'received')
                    }
                }
                // messages.scrollTop = messages.scrollHeight; // Scroll to the bottom
            });
    })


    function sendMessage() {
        const messageInput = document.getElementById('messagetext');
        const message = messageInput.value;
        messageInput.value = ''; // Clear input
        const id = "{{$user->id}}";

        const sendText = document.getElementById('sendText');
        const sendSpinner = document.getElementById('sendSpinner');

        sendText.classList.add('hidden');
        sendSpinner.classList.remove('hidden');

        fetch(`/dashboard/admin/user/message/${id}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({message: message, user_id: id})
        }).then((response) => {
            if (!response.ok) {
                throw new Error('Erreur lors de l\'envoi du message.');
            }
            // Ajouter le message envoyé dans l'interface
            addMessage(message, 'sent');
            messageInput.value = ''; // Effacer le champ d'entrée
        })
        .catch((error) => {
            console.error('Error:', error);
            alert('Une erreur est survenue lors de l\'envoi du message.');
        })
        .finally(() => {
            // Réinitialiser le bouton
            sendText.classList.remove('hidden');
            sendSpinner.classList.add('hidden')
        });
    }

</script>
@endsection
