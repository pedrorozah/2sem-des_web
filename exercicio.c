#include <stdio.h>
#include <ctype.h>
#include <string.h>

// STRUCT
typedef struct
{
    char nome[50];
    char situacao[10];
    int matricula;
    int faltas;
    float media;
    float p1;
    float p2;
} Aluno;

// PROTÓTIPOS
void inserirAlunos(Aluno *aluno);

void exibirALunos(Aluno aluno);

// PRINCIPAL
int main()
{
    // variáveis main
    int op;

    Aluno aluno;

    // lógica main
    do
    {
        printf("---------- MENU --------------\n");
        printf("1- Inserir alunos;\n");
        printf("2- Exibir alunos;\n");
        printf("3- Salvar dados;\n");
        printf("4- Carregar dados;\n");
        printf("5- Sair;\n\n");
        printf("Digite a opção: ");
        scanf("%d", &op);

        switch (op)
        {
        case 1:
            inserirAlunos(&aluno);
            break;
        case 2:
            exibirAlunos(aluno);
            break;
        case 3:
            // salvarDados();
            break;
        case 4:
            // carregarDados();
            break;
        case 5:
            printf("Encerrando programa...\n");
            break;

        default:
            break;
        }

    } while (op != 5);

    return 0;
}

// FUNÇÕES
void inserirAlunos(Aluno *aluno)
{
    // cadastra os dados de cada aluno
    printf("Digite o nome do aluno: ");
    fgets(aluno->nome, sizeof aluno->nome, stdin);
    printf("Digite a matrícula: ");
    scanf("%d", aluno->matricula);
    printf("Digite a nota da Prova 1: ");
    scanf("%f", aluno->p1);
    printf("Digite a nota da Prova 2: ");
    scanf("%f", aluno->p2);
    printf("Digite o número de faltas: ");
    scanf("%f", aluno->faltas);

    // calcula a média
    aluno->media = (aluno->p1 + aluno->p2) / 2;

    // verifica se está aprovado ou reprovado
    if ((aluno->media >= 6) && (aluno->faltas <= 20))
        strcpy(aluno->situacao, "Aprovado");
    else
        strcpy(aluno->situacao, "Reprovado");
}

void exibirAlunos(Aluno aluno)
{
    printf("Matrícula: %d\n", aluno.matricula);
    printf("Nome: %s\n", aluno.nome);
    printf("Média: %.2f\n", aluno.media);
    printf("Situação: %s\n", aluno.situacao);
}