<div class="quiz-container">
    <h1>{{$quiz->name }}</h1>
    @if(session('message'))
        <script>
            alert('{{ session('message') }}');
        </script>
        <!-- <div class="alert alert-success">
            {{ session('message') }}
        </div> -->
    @endif
    @foreach($quiz->questions as $question)
        <div class="question">
            <p>{{ $loop->iteration }}. {{ $question->text }}</p>
            <!-- <a href="{{ route('quizzes.edit', [$quiz->id, $question->id]) }}">編集</a>
            <form method='post' action="{{ route('quizzes.destroy', ['quizId' => $quiz->id, 'questionId' => $question->id]) }}"  onsubmit="return confirm('本当に削除しますか？')" class="flex-2">
                @csrf
                @method('delete')
                <x-primary-button class="bg-red-700 ml-2">削除</x-primary-button>
            </form> -->
            <ul style="list-style-type: decimal;">
                @foreach($question->choices as $choice)
                    <li>
                        <button class="choice-button" data-correct="{{ $choice->is_correct }}">
                            {{ $choice->text }}
                        </button>
                    </li>
                @endforeach
            </ul>
            <p class="result" style="color: green;"></p>
        </div>
    @endforeach
</div>

<!-- <script>
    document.querySelectorAll('.choice-button').forEach(button => {
        button.addEventListener('click', function() {
            if (this.dataset.correct == 1) {
                alert('正解!');
            } else {
                alert('不正解...');
            }
        });
    });
</script> -->
<script>
    document.querySelectorAll('.choice-button').forEach(button => {
        button.addEventListener('click', function() {
            const resultElement = this.closest('.question').querySelector('.result');
            if (this.dataset.correct == 1) {
                resultElement.textContent = '正解!';
                resultElement.style.color = 'green';  // 緑色で表示
            } else {
                resultElement.textContent = '不正解...';
                resultElement.style.color = 'red';  // 赤色で表示
            }
        });
    });
</script>

