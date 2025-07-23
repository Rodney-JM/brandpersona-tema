# 💼 Tema WordPress - Brand Persona - Teste

Este é um tema WordPress desenvolvido com base em um layout disponibilizado pela empresa PYXYS.

---

## 📌 Estrutura de Pastas

A organização do projeto foi planejada para separar melhor os arquivos e possibilitar uma manutenção futura de forma mais fácil:

```
brand-persona/
├── assets/
│   ├── styles/
│   │   ├── base/           # Reset, cores e tipografia
│   │   ├── layouts/        # CSS de cada seção
│   │   └── components/     # Botões, inputs, classes aproveitas e etc
│   ├── js/                 # Arquivo JavaScript main, usando para uma ação com o menu deixando a sessão inicial responsiva e de melhor uso
│   ├── images/             # Imagens utilizadas nas dentro do projeto
│   └── icons/              # Ícones e vetores
├── inc/
│   ├── enqueue.php         # Lógica para carregar CSS/JS dentro do projeto, garantindo uma melhor performance e controle das ações
│   └── core/               # Corpo central tendo o setup.php que faz as importações dos recursos nativos do WordPress, algo que seria feito pelo functions.php, mas separado para melhor organizaççao
├── partials/               # Partes do projeto, ou seja, cada sessão separada dentro de uma pasta para melhor reaproveitamento
    ├── section1.php
├── header.php / footer.php
└── ...
├── functions.php
└── ...
```

---

## 🔧 Separação no `inc/` ao invés do `functions.php`

Ao invés de deixar o código todo dentro de `functions.php`, preferi modularizar o projeto com arquivos auxiliares dentro da pasta `inc/`. Isso traz vantagens como:

- Melhor **legibilidade**
- Organização mais clara das responsabilidades
- Facilita a **manutenção e escalabilidade**
- Torna possível o reaproveitamento de código em outros projetos se desejado

---

## 🚀 Enfileiramento de Arquivos (enqueue.php)

O arquivo `inc/enqueue.php` é responsável por enfileirar todos os estilos e scripts usados no tema.

```php
$styles = [
  'main' => '/assets/styles/main.css',
  'colors' => '/assets/styles/base/colors.css',
  'fonts' => '/assets/styles/base/fonts.css',
  ...
];
```

Cada arquivo CSS é carregado dinamicamente e verificado com `file_exists()`. O uso de `filemtime()` garante que o navegador sempre carregue a versão mais atual, evitando problemas de cache.

Além disso, o arquivo JavaScript principal (`/assets/js/main.js`) também é enfileirado devidamente.

---

## 🧩 Seções do Projeto

O tema foi dividido em **9 seções principais**, cada uma com sua respectiva estilização em arquivos separados dentro de styles/layouts:

1. **Home** – Apresentação principal da Brand Persona
2. **Por que Brand Persona** – Argumentos sobre a importância do serviço
3. **O Mercado** – Análise e oportunidades no mercado atual
4. **Vantagens** – Benefícios e diferenciais da solução
5. **Como Funciona** – Processo de criação e entrega
6. **O Combo** – Parceria com a Ilustraria
7. **Depoimentos / Provas Sociais** – Feedbacks e validação
8. **FAQ** – Perguntas frequentes
9. **Contato** – Formulário e canais de contato

---

## 💻 Tecnologias Utilizadas

- **WordPress**
- **HTML5 / CSS3** 
- **JavaScript Vanilla**
- **Boxicons** (para alguns ícones adicionais)

---

## 📱 Responsividade

A estrutura responsiva foi pensada com base em `@media (max-width: 1024px)` para tablets e dispositivos móveis. O menu de navegação é substituído por um ícone interativo que revela a navegação vertical ao ser clicado.

## 🔝 Botão "Voltar ao Topo"

O projeto conta com um botão flutuante de **"voltar ao topo"**, que aparece automaticamente quando o usuário rola a página além da seção **Home**. Ao ser clicado, ele leva suavemente o visitante de volta ao topo da página, isso tem grande utilidade uma vez que o cabeçalho da página não pode ser fixed, além do mais, melhora o visual.

---
