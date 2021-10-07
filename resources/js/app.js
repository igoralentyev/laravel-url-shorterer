require('./bootstrap')

const form = document.querySelector('form')
const formBlock = document.querySelector('.form')

form.addEventListener('submit', (event) => {
    event.preventDefault()

    const user_url = form.querySelector('.user_url').value

    console.log(user_url)

    axios({
        method: 'post',
        url: '/short/',
        data: {
            user_url: user_url,
        }
    }).then((response) => {
        const successBlock = document.querySelector('.success')

        successBlock.querySelector('.short_url').innerHTML = response.data.short_url
        successBlock.classList.add('show')
        formBlock.classList.add('hide')
        document.querySelector('.title').classList.add('hide')


    })

})

