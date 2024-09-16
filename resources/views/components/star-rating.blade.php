<div class="flex items-center">
    @for ($i = 1; $i <= 5; $i++)
        @if ($rating >= $i)
            <!-- Estrella llena (amarilla) -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-yellow-500" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.396.198-.855-.149-.746-.592l.83-4.73L.173 6.765c-.33-.32-.158-.888.283-.95l4.898-.696 2.04-4.29c.197-.414.73-.414.927 0l2.04 4.29 4.898.696c.441.062.613.63.283.95l-3.523 3.356.83 4.73c.109.443-.35.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
        @elseif ($rating >= $i - 0.5)
            <!-- Media estrella (amarilla a la izquierda) -->
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-gray-400" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.396.198-.855-.149-.746-.592l.83-4.73L.173 6.765c-.33-.32-.158-.888.283-.95l4.898-.696 2.04-4.29c.197-.414.73-.414.927 0l2.04 4.29 4.898.696c.441.062.613.63.283.95l-3.523 3.356.83 4.73c.109.443-.35.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                <div class="absolute top-0 left-0 w-1/2 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-yellow-500" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.396.198-.855-.149-.746-.592l.83-4.73L.173 6.765c-.33-.32-.158-.888.283-.95l4.898-.696 2.04-4.29c.197-.414.73-.414.927 0l2.04 4.29 4.898.696c.441.062.613.63.283.95l-3.523 3.356.83 4.73c.109.443-.35.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                </div>
            </div>
        @else
            <!-- Estrella vacía (gris entero) -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-gray-400" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.396.198-.855-.149-.746-.592l.83-4.73L.173 6.765c-.33-.32-.158-.888.283-.95l4.898-.696 2.04-4.29c.197-.414.73-.414.927 0l2.04 4.29 4.898.696c.441.062.613.63.283.95l-3.523 3.356.83 4.73c.109.443-.35.79-.746.592L8 13.187l-4.389 2.256z"/>
            </svg>
        @endif
    @endfor
</div>
