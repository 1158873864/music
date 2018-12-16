var pagers = document.querySelector('.pagers')
        var lis = pagers.getElementsByTagName("li");
        console.log(lis.length);
        var keyValue = 1;
        pagers.addEventListener('click', function (e) {
            var target = e.target;
            if (target.innerHTML === '下一页') {
                keyValue++;
                if (keyValue >= 8) keyValue = 1;
                for (let i = 0; i < lis.length; i++) {
                    lis[i].className = " ";
                }
                console.log(keyValue)
                lis[keyValue].className = 'active'
            } else if (target.innerHTML === '上一页') {
                keyValue--;
                if (keyValue <= 0) keyValue = 7;
                for (let i = 0; i < lis.length; i++) {
                    lis[i].className = " ";
                }
                console.log(keyValue)
                lis[keyValue].className = 'active';

            // 这段必须写明LI要不然会出现页面bug
            } else if(target.nodeName === 'LI'){
                for (let i = 0; i < lis.length; i++) {
                    lis[i].className = " ";
                    keyValue = Number(target.innerHTML);
                }
                target.className = "active"
            }
        })