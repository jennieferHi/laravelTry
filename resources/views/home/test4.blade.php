 
當前是test4.blade.php<br/>
  
{{-- Foreach loop to iterate over items --}}
{{-- {{ $item->name }}: 適用於物件屬性訪問。
{{ $item['name'] }}: 適用於陣列元素訪問。 --}}
<ul>
    {{-- {{ $item['name'] }}: 適用於陣列元素訪問。 --}} 
    @foreach ($items as $item)
        <li>
            <strong>{{ $item['name'] }}</strong>: {{ $item['description'] }}
        </li>
    @endforeach
</ul>
<ul>
    {{--  {{ $item->name }}: 適用於物件屬性訪問。 --}}
    @foreach ($result as $item)
        <li>
            <strong>{{ $item->name }}</strong>: {{ $item->id }}
        </li>
    @endforeach
</ul>

{{-- Using PHP syntax for foreach loop --}}
<ul>
    <?php foreach ($items as $item): ?>
        <li>
            <strong><?php echo $item['name']; ?></strong>: <?php echo $item['description']; ?>
        </li>
    <?php endforeach; ?>
</ul>