 
當前是test4.blade.php<br/>
  
{{-- Foreach loop to iterate over items --}}
{{-- {{ $item->name }}: 適用於物件屬性訪問。
{{ $item['name'] }}: 適用於陣列元素訪問。 --}}
 

{{-- example.blade.php --}}

@if ($condition1)
    <p>條件1為真</p>
@elseif ($condition2)
    <p>條件2為真</p>
@else
    <p>以上條件均為假</p>
@endif
{{-- 簡化條件為假的情況： --}}

@unless ($condition)
    <p>條件為假</p>
@endunless

{{-- 檢查陣列或集合是否為空 --}}
@forelse ($items as $item)
    <p>項目: {{ $item }}</p>
@empty
    <p>沒有項目</p>
@endforelse